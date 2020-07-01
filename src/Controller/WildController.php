<?php
// src/Controller/WildController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
* @Route("wild", name="wild_")
*/
Class WildController extends AbstractController
{
  /**
   * @Route("/show/{slug}",
      requirements={"slug"="[a-z0-9\-\/]+"},
      name="show")
  */
  public function show(?string $slug = ""): Response
  {
      $slug = str_replace('-', ' ', $slug);
      $slug = ucwords($slug);
      if(empty($slug)) {
          $slug = "Aucune série sélectionnée, veuillez en choisir une";
      }
      return $this->render(
          'wild/show.html.twig', [
          'slug' => $slug
      ]);
  }

}
