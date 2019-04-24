<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class OlaMundoController {

    /**
     * @Route("/ola")
     */
    public function olaMundoAction(Request $request): Response {
        return new JsonResponse(['mensagem' => 'Ola Mundoooo']);
    }
}
