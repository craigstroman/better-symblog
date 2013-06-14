<?php

namespace Blogger\BlogBundle\Controller;

use Blogger\BlogBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $blogs = $em->createQueryBuilder()
                    ->select('b')
                    ->from('BloggerBlogBundle:Post',  'b')
                    ->addOrderBy('b.created_at', 'DESC')
                    ->getQuery()
                    ->getResult();
        
        return $this->render('BloggerBlogBundle:Default:index.html.twig', array(
            'blogs' => $blogs
        ));
    }
}
