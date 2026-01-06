<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/blog/index', name: 'app_index')] 
    public function index(): Response
    {
        return $this->render('blog/index.html.twig');
    }

    #[Route('/blog/presentation', name: 'app_blog_presentation')]
    public function presentation(): Response
    {
        return $this->render('blog/presentation.html.twig');
    }

    #[Route('/blog/competences', name: 'app_blog_competences')]
    public function competences(): Response
    {
        return $this->render('blog/competences.html.twig');
    }

    #[Route('/blog/cv', name: 'app_blog_cv')]
    public function cv(): Response
    {
        return $this->render('blog/cv.html.twig');
    }
}
