<?php
// src/Controller/TravelController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TravelController extends AbstractController
{
    /**
     * @Route("/packages", name="packages")
     */
    public function packages(): Response
    {
        return $this->render('packages/index.html.twig');
    }
}
