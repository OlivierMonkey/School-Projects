<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GalleryController extends Controller
{
    /**
     * @Route("/gallery", name="gallery")
     */
    public function indexAction(Request $request)
    {
        $images = [
                'summer_1.jpg',
                'summer_2.jpg',
                'summer_3.jpg',
                'summer_4.jpg',
                'summer_5.jpg',
                'summer_6.jpg',
                'summer_7.jpg',
                'summer_8.jpg',
                'summer_9.jpg',
                'summer_10.jpg',

            ];

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $images,
            $request->query->getInt('page', 1), 4
        );

        return $this->render('gallery/index.html.twig', [
            'images' => $pagination
            ]);

    }
}
