<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blogger\BlogBundle\Entity\Post;
use Blogger\BlogBundle\Form\NewPostType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller{
//return new Response();
	public function myAccountAction(){
		return $this->render('BloggerBlogBundle:MyAccount:index.html.twig',array(''=>''));
	}
	
	public function showUserPostsAction(){
		
	}
	
	public function createPostAction(){
		
		$form = $this->createFormBuilder()
		    ->add('post_creator', 'hidden')
		    ->add('post_title','text')
		    ->add('post_text','textarea')
		    ->getForm();

		if ($this->getRequest()->getMethod() == 'POST') {
		    $form->bind($this->getRequest()->get('form'));
		    if ($form->isValid()) {
				$formdata = $form->getData();
				
				$post = new post();
				$post->setCreatedAt(new \DateTime('now'));
				$post->setPostCreator($formdata['post_creator']);
				$post->setPostTitle($formdata['post_title']);
				$post->setPostText($formdata['post_text']);
				
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($post);
				$em->flush();
				
				return $this->render('BloggerBlogBundle:NewPost:post-created.html.twig',array('form'  => $form->createView()));	
		    }
		}
	
		return $this->render('BloggerBlogBundle:NewPost:index.html.twig',array('form'  => $form->createView()));
		
	}
	
	public function showAction($id){
		$em = $this->getDoctrine()->getEntityManager();
		
		$blog = $em->getRepository('BloggerBlogBundle:Post')->find($id);
		
		/*if($blogArticle){
			throw $this>createNotFoundException('Unable to find Blog post');
		}*/
        
		return $this->render('BloggerBlogBundle:Blog:show.html.twig', array(
		    'blog' => $blog,
		));		
		
	}
}