<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LeControlProduitController extends AbstractController
{
    /**
     * @Route("/", name="le_control_produit")
     */
    public function index(): Response
    {
        $tab = ['x','y','z'];

        return $this->render('le_control_produit/index.html.twig', [
            'controller_name' => 'LeControlProduitController',
            'message'=>'bonjour tou le monde',
            'data' => $tab
        ]);
    }
}
