<?php

namespace App\Controller;

use App\Entity\Producteur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class AgrimapController extends AbstractController
{
    /**
     * @Route("/agrimap/", name="agrimap")
     */
    public function index(): Response
    {

        return $this->render('agrimap/index.html.twig', [
            'controller_name' => 'AgrimapController',
        ]);
    }
}
