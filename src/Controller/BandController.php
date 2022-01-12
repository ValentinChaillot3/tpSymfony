<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Band;
use App\Entity\Artist;

class BandController extends AbstractController
{
    /**
     * @Route("/bands", name="bands_list")
     */
    public function index(): Response
    {
      $band = $this->getDoctrine()
        ->getRepository(Band::class)
        ->findAll();
        return $this->render('band/list.html.twig', [
            'controller_name' => 'BandController',
            'list' => $band,
        ]);
    }

    /**
     * @Route("/band/{id}", name="band_show")
     */
    public function band($id): Response
    {
      $band = $this->getDoctrine()
        ->getRepository(Band::class)
        ->find($id);
        return $this->render('band/band.html.twig', [
            'controller_name' => 'BandController',
            'band' => $band,
        ]);
    }


}
