<?php

namespace EncyclopeadiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EncyclopeadiaBundle:Default:index.html.twig');
    }
}
