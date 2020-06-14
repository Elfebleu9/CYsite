<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BilletsController extends AbstractController
{
    /**
     * @Route("/billets", name="billets")
     */
    public function index()
    {
        return $this->render('billets/index.html.twig', [
            'controller_name' => 'BilletsController',
        ]);
    }
}
