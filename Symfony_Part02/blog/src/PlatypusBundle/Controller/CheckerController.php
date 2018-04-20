<?php

namespace PlatypusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CheckerController extends Controller
{
    public function showAction($type, $id)
    {
        return $this->render('PlatypusBundle:Checker:show.html.twig', array(
            'type' => $type,
            'id' => $id
        ));
    }

    public function showParamsAction()
    {
        $request = Request::createFromGlobals();
        $params = $request->query->all();
        return $this->render('PlatypusBundle:Checker:show_params.html.twig', array(
            "get" => $params
        ));
    }

}
