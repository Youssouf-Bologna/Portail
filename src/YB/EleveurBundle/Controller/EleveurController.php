<?php

namespace YB\EleveurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EleveurController extends Controller
{
    public function indexAction()
    {
        return $this->render('YBEleveurBundle:Eleveur:index.html.twig');
    }
    
    public function exploitationEditAction()
    {
        //TODO: modifier les paramétre de l'exploitation
    }
    
    public function cheptelAction()
    {
        //TODO: page de presentation du cheptel par catégorie d'annimeaux
    }
    
    public function annimeauxAction()
    {
        //TODO: liste des annimeaus dans une catégorie
    }
    
    public function annimalAddAction()
    {
        //TODO: Ajout d'un annimal
    }
    
    public function annimalDelAction()
    {
        //TODO: supprime un annimal
    }
    
    public function annimalEditAction()
    {
        //TODO: modifie un annimal
    }
}
