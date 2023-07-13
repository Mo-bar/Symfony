<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/home/{name}")
     * @return Response
     */
 public function index(string $name)
 {
    return $this-> render('home.html.twig', ['name' => $name]);
 }

    /**
     * @Route("/signup",name="signup-pg")
     * @return Response
     */
 public function signup(){
     return $this->render('auth/signup.html.twig');
 }

    /**
     * @Route("/login",name="login-pg")
     * @return Response
     */
public function login(){
    return $this-> render('auth/login.html.twig');
}

}