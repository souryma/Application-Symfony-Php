<?php

namespace App\Controller;

use App\Entity\Variete;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;

class AgridexController extends AbstractController
{
    /**
     * @Route("/agridex/{name}", name="agridex")
     * @Route("/agridex/", defaults={"name"="Inconnu"})
     */
    public function index($name)
    {

        $prd = new Produit();
        $repository=$this->getDoctrine()->getManager()->getRepository('App\Entity\Produit');
        $produit=$repository->findAll();
        $legume=$repository->findByCategorieProduit('legume');
        $feculent=$repository->findByCategorieProduit('feculent');
        $autre=$repository->findByCategorieProduit('autre');
        $fruit=$repository->findByCategorieProduit('fruit');



        return $this->render('agridex/index.html.twig', [
            'prd' => $prd,
            'produit' => $produit,
            'Legume'=> $legume,
            'Fruit'=> $fruit,
            'Feculent'=> $feculent,
            'Autre'=> $autre,
            'controller_name' => 'AgridexController',
        ]);

    }

}
