<?php

namespace Societe\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SocieteFrontBundle::base_front.html.twig');
    }
}
