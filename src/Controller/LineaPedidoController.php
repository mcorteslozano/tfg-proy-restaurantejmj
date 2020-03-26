<?php

namespace App\Controller;

use App\Entity\LineaPedido;
use App\Form\LineaPedidoType;
use App\Repository\LineaPedidoRepository;
use App\Repository\ArticuloRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/linea/pedido")
 */
class LineaPedidoController extends AbstractController
{
    /**
     * @Route("/", name="linea_pedido_index", methods={"GET"})
     */
    public function index(LineaPedidoRepository $lineaPedidoRepository): Response
    {
        return $this->render('pedido/index.html.twig', [
            'linea_pedidos' => $lineaPedidoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="linea_pedido_new", methods={"GET","POST"})
     */
    public function new(Request $request, ArticuloRepository $articuloRepository): Response
    {
        $lineaPedido = new LineaPedido();
        $form = $this->createForm(LineaPedidoType::class, $lineaPedido);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $resultado=$articuloRepository->findAll();
           
            for($i=0;$i<count($resultado);$i++){
               if($lineaPedido->getIdArticulo()==$resultado[$i]->getNombre()){
                   $precio=$resultado[$i]->getPrecio();
               }
            }
            
            $lineaPedido->setPrecioLinea($precio*$lineaPedido->getUnidades());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($lineaPedido);
            $entityManager->flush();

            return $this->redirectToRoute('pedido_index');
        }
    }

    /**
     * @Route("/{id}", name="linea_pedido_show", methods={"GET"})
     */
    public function show(LineaPedido $lineaPedido): Response
    {
        return $this->render('linea_pedido/show.html.twig', [
            'linea_pedido' => $lineaPedido,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="linea_pedido_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, LineaPedido $lineaPedido): Response
    {
        $form = $this->createForm(LineaPedidoType::class, $lineaPedido);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pedido_index');
        }

        return $this->render('linea_pedido/edit.html.twig', [
            'linea_pedido' => $lineaPedido,
            'form_linea' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="linea_pedido_delete", methods={"DELETE"})
     */
    public function delete(Request $request, LineaPedido $lineaPedido): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lineaPedido->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($lineaPedido);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pedido_index');
    }
}
