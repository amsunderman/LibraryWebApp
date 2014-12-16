<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $session = new Session();

        //if session has a user go to home page, else login page
    	if($session->has('user'))
    	{
    		return $this->render('default/home.html.twig');
    	}
    	else
    	{
			return $this->render('default/login.html.twig');
    	}
    }
}
