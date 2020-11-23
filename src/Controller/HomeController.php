<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function home(): Response
    {
        $persons = [
            "Michel" => 49,
            "Julien" => 32,
            "Lilia" => 29
            ];

        return $this->render("home.html.twig", [
            "persons" => $persons,
            ]);
    }

    /**
     * @Route("/blog/{page}", name="blog_show", requirements={"page"="\d+"})
     * @param int $page
     * @return Response
     */
    public function hello(int $page): Response
    {
        return new Response("Bienvenue sur mon blog vous êtes sur la page $page");
    }
}
