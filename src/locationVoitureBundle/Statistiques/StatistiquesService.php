<?php
namespace locationVoitureBundle\Statistiques;

use Symfony\Component\HttpFoundation\Request;
use locationVoitureBundle\Entity\Client;
use locationVoitureBundle\Entity\Location;
use locationVoitureBundle\Entity\Vehicule;
use locationVoitureBundle\Entity\Agence;

/**
 *
 */
class StatistiquesService
{
  public function getClientNumber()
  {
    $em = $this->getDoctrine()->getManager();

    $data=$em->getRepository('locationVoitureBundle:Client')->findAll();
        return count($data);
  }
}





?>
