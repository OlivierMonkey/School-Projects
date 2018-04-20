<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        $spring = [
            "spring_1.jpg",
            "spring_2.jpg",
            "spring_3.jpg",
            "spring_4.jpg",
            "spring_5.jpg",
            "spring_6.jpg",
            "spring_7.jpg",
            "spring_8.jpg",
            "spring_9.jpg",
            "spring_10.jpg",
        ];

        $summer = [
            "summer_1.jpg",
            "summer_2.jpg",
            "summer_3.jpg",
            "summer_4.jpg",
            "summer_5.jpg",
            "summer_6.jpg",
            "summer_7.jpg",
            "summer_8.jpg",
            "summer_9.jpg",
            "summer_10.jpg",
        ];

        $autumn = [
            "autumn_1.jpg",
            "autumn_2.jpg",
            "autumn_3.jpg",
            "autumn_4.jpg",
            "autumn_5.jpg",
            "autumn_6.jpg",
            "autumn_7.jpg",
            "autumn_8.jpg",
            "autumn_9.jpg",
            "autumn_10.jpg",
        ];

        $winter = [
            "winter_1.jpg",
            "winter_2.jpg",
            "winter_3.jpg",
            "winter_4.jpg",
            "winter_5.jpg",
            "winter_6.jpg",
            "winter_7.jpg",
            "winter_8.jpg",
            "winter_9.jpg",
            "winter_10.jpg",
        ];

        $images = array_merge($spring, $summer, $autumn, $winter);

        shuffle($images);

        $randomisedImages = array_slice($images, 0, 8);

        return $this->render('home/index.html.twig', [
            'randomised_images' => $randomisedImages,
            'spring'            => array_slice($spring, 0, 2),
            'summer'            => array_slice($summer, 0, 2),
            'autumn'            => array_slice($autumn, 0, 2),
            'winter'            => array_slice($winter, 0, 2),
        ]);
    }
}

?>