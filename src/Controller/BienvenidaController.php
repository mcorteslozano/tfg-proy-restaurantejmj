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
    public function index()
    {
        return $this->render('bienvenida/index.html.twig', [
            'controller_name' => 'BienvenidaController',
        ]);
    }
}
