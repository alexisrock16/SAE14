<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    
    


    /**
     * @Route("/monportfolio", name="monportfolio")
     */
    public function salut(): Response
    {
        return $this->render('portfolio.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    
    
    
    /**
     * @Route("/cv", name="cv")
     */
    public function lecv(): Response
    {
        return $this->render('cv.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    
    
    
   /**
     * @Route("/apropos", name="apropos")
     */
    public function propos(): Response
    {
        return $this->render('apropos.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    } 
    
    
    
    
    
}


