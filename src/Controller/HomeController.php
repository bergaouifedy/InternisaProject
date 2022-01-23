<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

      /**
     * @Route("/404", name="404")
     */
    public function errorPage(): Response
    {
        return $this->render('home/404.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
