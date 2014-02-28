<?php

namespace ISS\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('ISSSiteBundle:Page:index.html.twig', array('name' => "asdasd"));
    }

    public function companyAction()
    {}
    public function clientsAction()
    {}
    public function servicesAction()
    {}
    public function portfolioAction()
    {}
    public function careerAction()
    {}
    public function contactsAction()
    {}
    public function buildAction()
    {}
}
