<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CartaController extends AbstractController
{
    /**
     * @Route("/carta", name="carta")
     */
    public function index()
    {
        return $this->render('carta/index.html.twig', [
            'controller_name' => 'CartaController',
        ]);
    }
}
