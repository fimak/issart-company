<?php

namespace ISS\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PostController extends Controller
{
    /**
     * @Route("/blog/index", name="index")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $posts = $em->getRepository('ISSBlogBundle:Post')->findAll();
        return array('posts' => $posts);
    }

    /**
     * @Route("/blog/post/{id}", name="_view")
     * @Template()
     */
    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $post = $em->getRepository('ISSBlogBundle:Post')->find($id);
        if (!$post) {
            throw $this->createNotFoundException('Unable to find blog post.');
        }
        return array('post' => $post);
    }
}
