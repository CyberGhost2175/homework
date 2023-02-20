<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class MainController extends AbstractController{


    #[Route('/', name: 'app_homepage')]
    public function index()
    {
        $request = Request::createFromGlobals();
$request.dump($_SERVER);
        return $this->render('base.html.twig', $request);
    }
}
