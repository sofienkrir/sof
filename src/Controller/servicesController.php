<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class servicesController extends AbstractController
{
    /**
     * @Route("/services", name="services")
     */
    public function index(): Response
    {
        return $this->render('page/services.html.twig');
    }
}