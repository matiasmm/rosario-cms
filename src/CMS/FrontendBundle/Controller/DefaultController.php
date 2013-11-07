<?php

namespace CMS\FrontendBundle\Controller;

use CMS\FrontendBundle\Entity\Content;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction(){
        $contents = $this->getDoctrine()->getRepository('CMSFrontendBundle:Content')
        ->findAll();

        return $this->render('CMSFrontendBundle:Default:index.html.twig', array('contents' => $contents));
    }

    public function showAction($id){
        $content = $this->getDoctrine()->getRepository('CMSFrontendBundle:Content')
            ->find($id);

        return $this->render('CMSFrontendBundle:Default:show.html.twig', array('content' => $content));
    }
}
