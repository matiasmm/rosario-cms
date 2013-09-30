<?php

namespace CMS\FrontendBundle\Controller;

use CMS\FrontendBundle\Entity\Content;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name){
        $contents = $this->getDoctrine()->getRepository('CMSFrontendBundle:Content')
        ->findAll();

        return $this->render('CMSFrontendBundle:Default:index.html.twig', array('contents' => $contents));
    }
}
