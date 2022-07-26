<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('default/index.html.twig', 
        [
            'controller_name' => 'DefaultController',
            'prenom' => 'Alexis',
        ]
    );
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('default/contact.html.twig', 
        [
            'controller_name' => 'DefaultController',
            'mail' => 'alexis.saviot@gmail.com',
        ]
    );
    }
}
