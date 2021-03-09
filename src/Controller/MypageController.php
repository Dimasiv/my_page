<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MypageController extends Controller
{
    public function page()
    {
        return $this->render('page/number.html.twig');
    }
}