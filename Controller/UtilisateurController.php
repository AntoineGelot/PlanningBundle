<?php

namespace IUT\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UtilisateurController extends Controller
{
    /**
     * @Route("/add")
     * @Template()
     */
    public function addAction()
    {
		return $this->render('PlanningBundle:UtilisateurController:add.html.twig');
	}

    /**
     * @Route("/showId")
     * @Template()
     */
    public function showIdAction()
    {
		return $this->render('PlanningBundle:UtilisateurController:showId.html.twig');
    }
    
    /**
     * @Route("/index")
     * @Template()
     */
     public function indexAction()
     {
		 return $this->render('PlanningBundle:UtilisateurController:index.html.twig');
	 } 

}
