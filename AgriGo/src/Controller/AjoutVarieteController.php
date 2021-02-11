<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Twig\Environment;
use App\Entity\Variete;
use App\Form\AjoutVarieteFormType;

class AjoutVarieteController extends AbstractController
{
    /**
     * @Route("/ajoutVariete", name="ajout_variete")
     */
    public function show(Environment $twig, Request $request, EntityManagerInterface $entityManager)
    {
        $variete = new Variete();

        $form = $this->createForm(AjoutVarieteFormType::class, $variete);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($variete);
            $entityManager->flush();
            return new Response($twig->render('ajout_variete/validationVariete.html.twig', [
                'producteur_form' => $form->createView(),
            ]));
        }

        return new Response($twig->render('ajout_variete/index.html.twig', [
            'variete_form' => $form->createView()
        ]));
    }
}
