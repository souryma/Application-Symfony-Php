<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Producteur;
use Doctrine\ORM\EntityManagerInterface;

class ListeProducteursController extends AbstractController
{
    /**
     * @Route("/listeProducteurs", name="liste_producteurs")
     */
    public function index(): Response
    {
        // création de la variable $producteur permettant de parcourir la liste des producteurs
        // sélection de la liste de tous les producteurs dans la variable $producteurs
        $producteur = new Producteur();
        $repository=$this->getDoctrine()->getManager()->getRepository('App\Entity\Producteur');
        $producteurs=$repository->findAll();

        // appel du twig en lui envoyant les variables nécessaires à l'affichage de tous les producteurs
        return $this->render('liste_producteurs/index.html.twig', [
            'producteur' => $producteur,
            'producteurs' => $producteurs,
            'controller_name' => 'ListeProducteursController',
        ]);
    }
}
