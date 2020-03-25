<?php

namespace App\Controller;

use App\Entity\Pedido;
use App\Entity\LineaPedido;
use App\Form\PedidoType;
use App\Form\LineaPedidoType;
use App\Repository\PedidoRepository;
use App\Repository\LineaPedidoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/pedido")
 */
class PedidoController extends AbstractController
{
    /**
     * @Route("/", name="pedido_index", methods={"GET"})
     */
    public function index(PedidoRepository $pedidoRepository , LineaPedidoRepository $lineaPedidoRepository): Response
    {
        $pedido = new Pedido();
        $form_pedido = $this->createForm(PedidoType::class, $pedido, [
            'action' => $this->generateUrl('pedido_new'),
            'method' => 'POST',
        ]);

        $linea_pedido = new LineaPedido();
        $form_linea = $this->createForm(LineaPedidoType::class, $linea_pedido, [
            'action' => $this->generateUrl('linea_pedido_new'),
            'method' => 'POST',
        ]);

        return $this->render('pedido/index.html.twig', [
            'pedidos' => $pedidoRepository->findAll(),
            'linea_pedidos' => $lineaPedidoRepository->findAll(),
            'pedido' => $pedido,
            'form_pedido' => $form_pedido->createView(),
            'linea_pedido' => $linea_pedido,
            'form_linea' => $form_linea->createView(),
        ]);
    }

    /**
     * @Route("/new", name="pedido_new", methods={"GET","POST"})
     */
    public function new(Request $request,\Swift_Mailer $mailer): Response
    {
        $pedido = new Pedido();
        $form = $this->createForm(PedidoType::class, $pedido);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {    
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pedido);
            $entityManager->flush();

            /* Envío de correo electrónico */
            $form = $form->getData();

            /* Datos del pedido */
            $fecha_pedido = $pedido->getFechaPedido();
            $fecha_entrega = $pedido->getFechaEntrega();
            $id_proveedor = $pedido->getIdProveedor();

            $em = $this->getDoctrine()->getManager();
            $connection = $em->getConnection();
            $statement = $connection->prepare("SELECT nombre FROM articulo WHERE id=(SELECT id_articulo_id FROM linea_pedido)");
            $statement->execute();
            $results = $statement->fetchAll();

            $mensaje = (new \Swift_Message('Nuevo pedido de Restaurante JMJ '))
                ->setFrom(['restaurantejmj@gmail.com' => 'Restaurante JMJ'])
                ->setTo('restaurantejmj@gmail.com')
                ->setBody(
                    'Fecha de pedido: '.date_format($fecha_pedido, 'Y-m-d').
                    '<br>Fecha de entrega: '.date_format($fecha_entrega, 'Y-m-d').
                    '<br>Proveedor: '.$id_proveedor
                    , 'text/html')
            ;
            $mailer->send($mensaje);
            
            /* Eliminar línas */
            $statement = $connection->prepare("DELETE FROM linea_pedido");
            $statement->execute();
            $results = $statement->fetchAll();

            return $this->redirectToRoute('pedido_index');
        }
        
    }

    /**
     * @Route("/{id}", name="pedido_show", methods={"GET"})
     */
    public function show(Pedido $pedido): Response
    {
        return $this->render('pedido/show.html.twig', [
            'pedido' => $pedido,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pedido_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Pedido $pedido): Response
    {
        $form_pedido = $this->createForm(PedidoType::class, $pedido);
        $form_pedido->handleRequest($request);

        if ($form_pedido->isSubmitted() && $form_pedido->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pedido_index');
        }

        return $this->render('pedido/edit.html.twig', [
            'pedido' => $pedido,
            'form_pedido' => $form_pedido->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pedido_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Pedido $pedido): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pedido->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pedido);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pedido_index');
    }
}
