<?php

namespace EncyclopediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EncyclopediaBundle:Default:index.html.twig');
    }
}
