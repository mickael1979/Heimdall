<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndividualChatController extends AbstractController
{
    /**
     * @Route("/individual/chat", name="app_individual_chat")
     */
    public function index(): Response
    {
        return $this->render('individual_chat/individualChat.html.twig', [
            'controller_name' => 'IndividualChatController',
        ]);
    }
}
