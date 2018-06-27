<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortailController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoreBundle:Portail:index.html.twig');
    }
}
