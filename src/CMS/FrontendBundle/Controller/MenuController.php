<?php

namespace CMS\FrontendBundle\Controller;

use CMS\FrontendBundle\Entity\Content;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function indexAction(){
        $items = $this->getDoctrine()->getRepository('CMSFrontendBundle:Content')
            ->findBy(['featured'=> true]);

        return $this->render('CMSFrontendBundle::menu.html.twig', array('items' => $items));
    }
}
