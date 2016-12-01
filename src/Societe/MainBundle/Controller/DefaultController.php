<?php

namespace Societe\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SocieteMainBundle:Default:index.html.twig');
    }
}
