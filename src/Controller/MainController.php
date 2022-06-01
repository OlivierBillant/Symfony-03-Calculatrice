<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController {

    /**
     * @Route("/",name="app_calculatrice")
     */
    public function calculatrice():Response{
        return $this->render("pages/calculatrice.html.twig");
    }


     /**
     * @Route("/traitement",name="app_traitement")
     */
    public function aboutus():Response{
        return $this->render("pages/traitement.html.twig");
    }

     


}