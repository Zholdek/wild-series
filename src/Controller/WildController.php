<?php
// src/Controller/WildController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

Class WildController extends AbstractController
{
  /**
   * @Route("/wild/show/{slug}", requirements={slug"="[a-z0-9\-\/]+"}, name="wild_show")
  */

  public function show(string $slug = ""): Response
  {
      if(empty($slug)) {
          $slug = "Aucune série sélectionnée, veuillez en choisir une";
      }
      return $this->render('wild/show.html.twig', ['slug' => $slug ]);
  }

}
