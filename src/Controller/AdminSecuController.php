<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\InscriptionType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager as PersistenceObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminSecuController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function index(Request $request,ManagerRegistry $manager,UserPasswordEncoderInterface $encoder)
    {
        $utilisateur = new User();
        $form = $this->createForm(InscriptionType::class,$utilisateur);
        $form->handleRequest($request);
        if($form->isSubmitted()&& ($form->isValid()))
        {
            $passwordCrypt=$encoder->encodePassword($utilisateur,$utilisateur->getPassword());
            $utilisateur->setPassword($passwordCrypt);
            $manager->getManager()->persist($utilisateur);
            $manager->getManager()->flush();
            return $this->redirectToRoute("home");
        } else if($form->isSubmitted()&& (!$form->isValid())) {
            return $this ->redirectToRoute("404");
        }
        return $this->render('admin_secu/inscription.html.twig',[
            "form" => $form->createView()
        ]);
    }

      /**
     * @Route("/login", name="connexion")
     */
    public function login(AuthenticationUtils $util)
    {
        return $this->render("admin_secu/login.html.twig", [
            "lastUserName" => $util->getLastUsername(),
            "error" => $util->getLastAuthenticationError()

        ]);
        
    }

       /**
     * @Route("/logout", name="deconnexion")
     */
    public function logout()
    {
    }
}
