<?php

namespace App\Controller;

use App\Entity\Producteur;
use App\Entity\Variete;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilProducteurController extends AbstractController
{
    /**
     * @Route("/profilProducteur/{name}", name="profilProducteur")
     * @Route("/profilProducteur/", defaults={"name"="Inconnu"})
     */
    public function index($name): Response
    {

        // permet de retrouver sur la page de quel producteur nous sommes
        $repositoryP=$this->getDoctrine()->getManager()->getRepository('App\Entity\Producteur');
        $producteur=$repositoryP->findOneById($name);


        // recherche tous les produits vendus par le producteur
        $variete = new Variete();
        $repositoryV=$this->getDoctrine()->getManager()->getRepository('App\Entity\Variete');
        $varieteProducteur=$repositoryV->findByProducteurVariete($name);


        // appel du twig
        return $this->render('profil_producteur/index.html.twig', [
            'producteur' => $producteur,
            'variete' => $variete,
            'varieteProducteur' => $varieteProducteur,
        ]);
    }
}
