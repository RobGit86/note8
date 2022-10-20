<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {   
        
        $logged = $this->isGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        return $this->render('home/index.html.twig', [
            'logged' => $logged,
            'user' => $user,
            'controller_name' => 'HomeController',
        ]);
    }
}