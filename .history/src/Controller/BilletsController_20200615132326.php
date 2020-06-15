<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BilletsController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('billets/index.html.twig');
    }

    /**
     * @Route("/actus", name="actus")
     */
    public function actus()
    {
        return $this->render('billets/actus.html.twig');
    }

    /**
     * @Route("/coups_de_coeur", name="coeur")
     */
    public function cdcoeur()
    {
        return $this->render('billets/coeur.html.twig');
    }

    /**
     * @Route("/coups_de_gueule", name="gueule")
     */
    public function cdgueule()
    {
        return $this->render('billets/gueule.html.twig');
    }

    /**
     * @Route("/discussions", name="discute")
     */
    public function discussions()
    {
        return $this->render('billets/discute.html.twig');
    }
}
