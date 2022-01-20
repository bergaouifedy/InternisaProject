<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\InscriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminSecuController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function index(): Response
    {
        $utilisateur = new User();
        $form = $this->createForm(InscriptionType::class,$utilisateur);
        return $this->render('admin_secu/inscription.html.twig',[
            "form" => $form->createView()
        ]);
    }
}
