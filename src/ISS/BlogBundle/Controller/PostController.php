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

    /**
     * @Template()
     */
    public function consoleAction()
    {

        $facebook = $this->get('facebook');
        //$issart_profile = $facebook->api('/issart','GET');
        //$facebook = $this->container->get('fos_facebook.api');
        //var_dump($facebook->getUser());

        $user_profile = $facebook->api('/me','GET');
        var_dump($user_profile['name']);
        var_dump($user_profile['email']);


        $issart_messages = $facebook->api('/issart?fields=posts.limit(3)','GET');
        var_dump($issart_messages['posts']['data'][0]);
        var_dump($issart_messages['posts']['data'][1]);
        var_dump($issart_messages['posts']['data'][2]);

        //VK
        $issArtGroupId = '-26044456';
        $vkApi = $this->get('VkApiService');
        $vkPosts = $vkApi->api('wall.get', array(
            'owner_id' => $issArtGroupId,
            'count' => 3
        ));

        var_dump($vkPosts);

        return array();
    }
}
