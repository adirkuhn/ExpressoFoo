<?php

namespace Expresso\ExpressoFooBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ExpressoFooBundle:Default:index.html.twig', array('name' => $name));
    }
}
