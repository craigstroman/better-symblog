<?php
// src/Blogger/BlogBubdle/Entity/Post.php

namespace Blogger\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Blogger\BlogBundle\General\BlogURL as BlogURL;
/**
 * @ORM\Entity
 * @ORM\Table(name="posts")
 */
class Post{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
     /**
      * @ORM\Column(type="datetime")
      * 
      * @var datetime $created_at
      */
     protected $created_at;

     /**
      * @ORM\Column(type="integer")
      * 
      * @var integer $post_creator
      */     
     protected $post_creator;
     
    /**
     * @ORM\Column(type="string", length=300)
     *
     * @var string $post_title 
     */
    protected $post_title;
    
    /**
     * @ORM\Column(type="text")
     *
     * @var string $post_text 
     */
    protected $post_text;
    
    public function __construct()
    {
        $this->created_at = '';
        $this->post_title = '';
        $this->post_text = '';
        $this->post_creator = '';
    }
    public function getTitleSlug()
    {
        return BlogURL::slugify($this->getPostTitle());
    }    
    /**
     * Gets the id
     * 
     * @return integer 
     */	 
     public function getId()
     {
            return $this->id;
     }    
    /**
      * Sets when it was created
      * 
      * @param DateTime $value
      */
     public function setCreatedAt($value)
     {
            $this->created_at=$value;
     }
     
     /**
      * Gets when the user was created
      * 
      * @return DateTime
      */
     
     public function getCreatedAt()
     {
            return $this->created_at;
     }
     
     /**
      * Sets the post creator
      * 
      * @param integer $value
      */	 
     public function setPostCreator($value)
    {
            $this->post_creator=$value;
    }
    
    /**
     * Gets the post creator
     * 
     * @return integer 
     */
     public function getPostCreator()
     {
            return $this->post_creator;
     }     
     
     /**
      * Sets the post title
      * 
      * @param string $value
      */	 
     public function setPostTitle($value)
    {
            $this->post_title=$value;
    }
    
    /**
     * Gets the post title
     * 
     * @return string 
     */
     public function getPostTitle()
     {
            return $this->post_title;
     }
     
     /**
      * Sets the post text
      * 
      * @param string $value
      */	 
     public function setPostText($value)
    {
            $this->post_text=$value;
    }
    
    /**
     * Gets the post text
     * 
     * @return string 
     */
     public function getPostText($length=null)
     {
	    if (false === is_null($length) && $length > 0)
	        return substr($this->post_text, 0, $length);
	    else
	        return $this->post_text;        
     }        
}