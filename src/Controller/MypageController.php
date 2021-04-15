<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Module\ImageProvider;

class MyPageController extends AbstractController
{
    public function page(): Response
    {
        $container1 = new ImageProvider('programming');
        $firstItem = $container1 -> GetUrls();
        $container2 = new ImageProvider('kitten');
        $secondItem = $container2 -> GetUrls();
        $container3 = new ImageProvider('spring');
        $thirdItem = $container3 -> GetUrls();


        return $this->render('page.html.twig',[
            'urls1' => $firstItem,
            'urls2' => $secondItem,
            'urls3' => $thirdItem
        ]);
    }
}