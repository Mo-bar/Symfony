<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController
{
    /**
     * @Route("/{param}",)
     * @return Response
     */
 public function index(string $param){
     return new Response("Mr. $param,Welcome in Symfony");
 }
}