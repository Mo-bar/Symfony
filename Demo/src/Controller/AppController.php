<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AppController
{
    /**
     * @Route("/")
     * @return Response
     */
 public function index(Request $req)
 {
     $name = $req->get('name');
     return new Response("Mr. $name,Welcome in Symfony");
 }
}