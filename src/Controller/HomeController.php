<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        // Coloque aqui a lógica para renderizar a página inicial
        return new Response('Bem-vindo à minha página inicial!');
    }
}
