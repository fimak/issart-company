<?php

namespace ISS\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ISSBlogBundle:Default:index.html.twig');
    }
}
