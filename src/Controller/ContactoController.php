<?php

namespace App\Controller;

use App\Form\ContactoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactoController extends AbstractController
{
    /**
     * @Route("/contacto", name="contacto")
     */
    public function index(Request $request, \Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactoType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            
            $contacto = $form->getData();
            // Envío del correo
            $mensaje = (new \Swift_Message('Nuestro contacto'))
                ->setFrom($contacto['email'])
                ->setTo('restaurantejmj@gmail.com')
                ->setBody(
                    $this->renderView(
                        'emails/contacto.html.twig', compact('contacto')
                    ), 
                    'text/html'
                )
            ;
            $mailer->send($mensaje);
            return $this->redirectToRoute('articulo_index');
        }
        return $this->render('contacto/index.html.twig', [
            'contactoForm' => $form->createView()
        ]);
    }
}
