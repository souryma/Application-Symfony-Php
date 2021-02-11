<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Twig\Environment;
use App\Entity\Producteur;
use App\Form\CreationCompteFormType;

class CreationCompteController extends AbstractController
{
    /**
     * @Route("/creationcompte", name="creation_compte")
     */

    public function show(Environment $twig, Request $request, EntityManagerInterface $entityManager)
    {
        $producteur = new Producteur();

        $form = $this->createForm(CreationCompteFormType::class, $producteur); // Création du formulaire

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { // On vérifie si le formulaire est bien rempli
            $entityManager->persist($producteur); // On rentre les informations dans la table Producteur
            $entityManager->flush();
            return new Response($twig->render('creation_compte/validation.html.twig', [
                'producteur_form' => $form->createView(),
            ])); // On renvoie la vue de validation
        }

        return new Response($twig->render('creation_compte/index.html.twig', [
            'producteur_form' => $form->createView()
        ])); // La vue du formulaire
    }
}
