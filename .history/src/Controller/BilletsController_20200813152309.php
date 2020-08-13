<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BilletsController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index()
    {
        return $this->render('billets/index.html.twig');
    }

    /**
     * @Route("/actus", name="app_billets_actus")
     */
    public function actus()
    {
        return $this->render('billets/actus.html.twig');
    }

    /**
     * @Route("/coups_de_coeur", name="app_billets_coeur")
     */
    public function cdcoeur()
    {
        return $this->render('billets/coeur.html.twig');
    }

    /**
     * @Route("/coups_de_gueule", name="app_billets_gueule")
     */
    public function cdgueule()
    {
        return $this->render('billets/gueule.html.twig');
    }

    /**
     * @Route("/discussions", name="app_billets_discute")
     */
    public function discussions()
    {
        return $this->render('billets/discute.html.twig');
    }
}
