<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class number

{
    #[Route('/basic/hello-world', name: 'app_basic_helloworld')]
    public function index(): Response
    {
        return new Response(
            '<html><body>Hello world!!</body></html>'
        );
    }
}