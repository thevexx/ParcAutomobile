<?php

namespace gestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('gestionBundle:Default:index.html.twig');
    }
}
