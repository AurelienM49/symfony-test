<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
     * @Route("/wish", name="app_wish")
     */
class WishController extends AbstractController
{
    /**
     * @Route("/", name="_list")
     */
    public function list(): Response
    {

        $bucketList = ["Aller visiter une prison"=>"app_wish_detail", "Aller au Bahamas"=>"app_wish_detail", "Faire saut en parachute"=>"app_wish_detail"];
        return $this->render('wish/list.html.twig',compact("bucketList"));
    }
     /**
     * @Route("/detail/{id}", name="_detail")
     */
    public function detail($id): Response
    {
        return $this->render('wish/detail.html.twig');
    }
}
