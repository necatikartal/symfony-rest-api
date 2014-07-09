<?php

namespace Test\RestApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestRestApiBundle:Default:index.html.twig');
    }
}