<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonneControllersController extends AbstractController
{
    /**
     * @Route("/personne/controllers", name="personne_controllers")
     */
    public function index(): Response
    {
        return $this->render('personne_controllers/index.html.twig', [
            'controller_name' => 'PersonneControllersController',
        ]);
    }
   /**
    * @Route("/personne/controllers",name="personne_controllers")
    */
    public function creds(){
        return $this->render('personne_controllers/add.html.twig');
    }
}
