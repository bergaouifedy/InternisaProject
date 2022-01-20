<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\InscriptionType;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminSecuController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function index(Request $request, EntityManagerInterface $om)
    {
        $utilisateur = new User();
        $form = $this->createForm(InscriptionType::class,$utilisateur);
    
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid())
        {
            $om->persist($utilisateur);
            $om->flush();
            return $this->redirectToRoute("home");
        }
        return $this->render('admin_secu/inscription.html.twig',[
            "form" => $form->createView()
        ]);
    }
}
