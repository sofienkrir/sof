<?php

// src/Controller/PackagesController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class packagesController extends AbstractController
{
    /**
     * @Route("/packages", name="packages")
     */
    public function index(): Response
    {
        return $this->render('page/packages.html.twig');
    }
}
