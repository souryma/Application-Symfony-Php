<?php
namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Variete;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DescriptionProduitController extends AbstractController
{
    /**
     * @Route("/description/{name}", name="descriptionProduit")
     * @Route("/description/", defaults={"name"="Inconnu"})
     */
    public function index($name)
    {
        $produit = new Produit();
        $repository=$this->getDoctrine()->getManager()->getRepository('App\Entity\Produit');
        $produit=$repository->findOneByTypeProduit($name);

        $variete=$produit->getVarietes();








        return $this->render('description_produit/index.html.twig', [
            'name' => $name,
            'produit' => $produit,
            'Variete' => $variete,
            'controller_name' => 'descriptionProduitController',
        ]);
    }

}

