<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @return Response
     * @Route("/")
     */
    public function homepage() {
        return new Response('my first page in this project');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show ($slug) {
        return new Response(sprintf(
            'Future page to show the article: "%s"',
            $slug
        ));
    }
}