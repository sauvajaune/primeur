<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SecurrityController extends AbstractController
{
    /**
     * @Route("/securrity", name="securrity")
     */
    public function index()
    {
        return $this->render('securrity/index.html.twig', [
            'controller_name' => 'SecurrityController',
        ]);
    }
}
