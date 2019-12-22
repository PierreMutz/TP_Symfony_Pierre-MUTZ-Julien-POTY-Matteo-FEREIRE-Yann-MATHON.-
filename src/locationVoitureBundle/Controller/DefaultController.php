<?php

namespace locationVoitureBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use locationVoitureBundle\Statistiques\StatistiquesService;


class DefaultController extends Controller
{
    /**
     * Default Controller.
     * @Route("/")
     */
    public function indexAction()
    {
        // $service = $this->get('locationVoitureBundle.Statistiques');
        // $numClient=$service.getClientNumber();
      return $this->render('default/index.html.twig' /*, ['numclient'=>$numClient]*/);
    }




}
