<?php

namespace App\Controller;

use App\Form\ContactoType;
use App\Form\ContactoReservaType;
use App\Form\ContactoEventoType;
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
        $formEvento = $this->createForm(ContactoEventoType::class);
        $formReserva = $this->createForm(ContactoReservaType::class);
        
        $contacto2 = $request->request->all();
        $keys = null;
        $keys = array_keys($contacto2);

        
        if($keys != null){
            if($keys[0] == 'contacto'){
                $form->handleRequest($request);
            } else if($keys[0] == 'contacto_reserva'){
                $formReserva->handleRequest($request);
            } else if($keys[0] == 'contacto_evento'){
                $formEvento->handleRequest($request);
            }
        } 

        if($form->isSubmitted()){
    
            $contacto = $form->getData();
            
            /* Envío de mensaje correo electrónico */
            $mensaje = (new \Swift_Message('Nuevo mensaje de un cliente: NORMAL'))
            ->setFrom($contacto['email'])
            ->setTo('restaurantejmj@gmail.com')
            ->setBody('Se ha registrado un nuevo mensaje de un cliente a través de la página web www.restaurantejmj.es <br><br><b>Nombre del cliente:</b> '.$contacto['nombre']. '<br><b>Correo electrónico:</b> '.$contacto['email'].'<br><b>Mensaje:</b> '.$contacto['mensaje']
            , 'text/html');

            $mailer->send($mensaje);

        } else if($formEvento->isSubmitted()){
           
            $contacto = $formEvento->getData();
            
            /* Envío de mensaje correo electrónico */
            $mensaje = (new \Swift_Message('Nuevo mensaje de un cliente: EVENTO'))
            ->setFrom($contacto['email'])
            ->setTo('restaurantejmj@gmail.com')
            ->setBody('Se ha registrado un nuevo mensaje de un cliente a través de la página web www.restaurantejmj.es <br><br><b>Nombre del cliente:</b> '.$contacto['nombre']. '<br><b>Número de personas aprox.:</b>'.$contacto['personas'].'<br><b>Fecha de reserva:</b>'.$contacto['fecha']->format('Y-m-d').'<br><b>Correo electrónico:</b>'.$contacto['email'].'<br><b>Mensaje:</b> '.$contacto['mensaje']
            ,  'text/html');

            $mailer->send($mensaje);

        } else if($formReserva->isSubmitted()){
           
            $contacto = $formReserva->getData();
            
            /* Envío de mensaje correo electrónico */
            $mensaje = (new \Swift_Message('Nuevo mensaje de un cliente: RESERVA'))
            ->setFrom($contacto['email'])
            ->setTo('restaurantejmj@gmail.com')
            ->setBody('Se ha registrado un nuevo mensaje de un cliente a través de la página web www.restaurantejmj.es <br><br><b>Nombre del cliente:</b> '.$contacto['nombre']. '<br><b>Número de personas:</b>'.$contacto['personas'].'<br><b>Fecha de reserva:</b>'.$contacto['fecha']->format('Y-m-d').'<br><b>Correo electrónico:</b>'.$contacto['email'].'<br><b>Mensaje:</b> '.$contacto['mensaje']
            , 'text/html');

            $mailer->send($mensaje);

        }

        return $this->render('bienvenida/index.html.twig', [
            'contactoForm' => $form->createView(),
            'contactoReserva' => $formReserva->createView(),
            'contactoEvento' => $formEvento->createView()
        ]);
    }
}