<?php

namespace App\Controller;

use App\Form\ContactoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BienvenidaController extends AbstractController
{
    /**
     * @Route("/bienvenida", name="bienvenida")
     */
    public function index(Request $request, \Swift_Mailer $mailer)
    {

        $form = $this->createForm(ContactoType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $contacto = $form->getData();

            /* Envío de mensaje correo electrónico */
            $mensaje = (new \Swift_Message('Nuevo mensaje de un cliente'))
            ->setFrom($contacto['email'])
            ->setTo('restaurantejmj@gmail.com')
            ->setBody('Se ha registrado un nuevo mensaje de un cliente a través de la página web www.restaurantejmj.es <br><br><b>Nombre del cliente:</b> '.$contacto['nombre']. '<br><b>Correo electrónico:</b> '.$contacto['email'].'<br><b>Mensaje:</b> '.$contacto['mensaje']
            , 'text/html');

            $mailer->send($mensaje);

        }

        return $this->render('bienvenida/index.html.twig', [
            'contactoForm' => $form->createView()
        ]);
    }
}