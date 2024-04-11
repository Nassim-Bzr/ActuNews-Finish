<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{

    #[Route('/', name: 'default_home', methods: ['GET'])]
    public function home(): Response
    {
        return $this->render('default/home.html.twig');
    }


    #[Route('/contact', name: 'default_contact', methods: ['GET'])]
    public function contact(): Response
    {
        return $this->render('default/contact.html.twig');
    }

    /**
     * Permet d'afficher les articles de la catégorie
     * ex. https://localhost:8000/politique
     * @param $slug
     * @return Response
     */
    #[Route('/{slug}', name: 'default_category', methods: ['GET'])]
    public function category($slug): Response
    {
        return $this->render('default/home.html.twig');
    }

    /**
     * CONSIGNE : Créée la route permet d'afficher un article.
     * ex. https://localhost:8000/categorie/alias
     */
    #[Route('/{category}/{slug}', name: 'default_post', methods: ['GET'])]
    public function post($category, $slug): Response
    {
        return $this->render('default/home.html.twig');
    }
}
