<?php

namespace App\Controller;

use App\Entity\MailList;
use App\Form\MailListType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request): Response
    {

        // ------------------------------------
        // -------------                 FOOTER
        // ------------------------------------
        // Creating email list form
        $email_list = new MailList();
        $email_form = $this->createForm(MailListType::class, $email_list);

        // handling request for email list form
        $email_form->handleRequest($request);
        if ($email_form->isSubmitted() && $email_form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($email_list);
            $entityManager->flush();
        }

        // ------------------------------------
        // -------------                 RENDER
        // ------------------------------------
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'email_form' => $email_form->createView(),
        ]);
    }
}
