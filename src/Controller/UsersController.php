<?php

namespace App\Controller;

use App\Entity\Annonces;
use App\Form\AnnoncesType;
use App\Form\EditProfileType;
use App\Form\EmailType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UsersController extends AbstractController
{
    #[Route('/users', name: 'app_users')]
    public function index(): Response
    {
        return $this->render('users/index.html.twig');
    }
    #[Route('/users/annonces/ajout', name: 'app_users_ajout')]
    public function ajoutAnnonces(ManagerRegistry $doctrine, Request $request): Response
    {
        $annonce = new Annonces;
        $form = $this->createForm(AnnoncesType::class, $annonce);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $annonce->setUsers($this->getUser());
            $annonce->setActive(false);
            $em = $doctrine->getManager();
            $em->persist($annonce);
            $em->flush();
            return $this->redirectToRoute('app_users');
        }
        return $this->render('users/annonces/ajout.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/users/profile/edit', name: 'app_profile_edit')]
    public function editProfile(ManagerRegistry $doctrine, Request $request): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(EditProfileType::class, $this->getUser());
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('message', 'Profile has been updated');
            return $this->redirectToRoute('app_users');
        }
        return $this->render('users/editProfile.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/users/password/edit', name: 'app_password_edit')]
    public function editPassword(ManagerRegistry $doctrine, Request $request): Response
    {
        return $this->render('users/editPassword.html.twig');
    }
}