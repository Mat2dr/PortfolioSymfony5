<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SituationController extends AbstractController
{
    /**
     * @Route("/", name="situation")
     */
    public function index()
    {
        return $this->render('situation/index.html.twig', [
            'controller_name' => 'SituationController',
        ]);
    }
}
