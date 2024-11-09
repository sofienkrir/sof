<?php

// src/Controller/GallaryController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GallaryController extends AbstractController
{
    /**
     * @Route("/gallary", name="gallary")
     */
    public function index(): Response
    {
        return $this->render('page/gallary.html.twig');
    }
}
