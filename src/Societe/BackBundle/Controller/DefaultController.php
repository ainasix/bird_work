<?php

namespace Societe\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SocieteBackBundle:Default:index.html.twig');
    }
}
