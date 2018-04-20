<?php

namespace PlatypusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PlatypusBundle:User:index.html.twig');
    }
}
