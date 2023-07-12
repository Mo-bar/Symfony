<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class AppController
{
 public function index(){
     return new Response("Welcome in Symfony");
 }
}