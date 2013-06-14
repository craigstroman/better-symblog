<?php
// src/Blogger/BlogBubdle/Entity/Comments.php

namespace Blogger\BlogBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="comments")
 */
class Comments{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
     /**
      * @ORM\Column(type="datetime", name="created_at")
      * 
      * @var datetime $createdAt
      */
     protected $createdAt;
     
     /**
      * @ORM\Column(type="integer")
      * 
      * @var integer $comentCreator
      */
     protected $comentCreator;     
     
     /**
      * @ORM\Column(type="integer")
      * 
      * @var integer $postId
      */
     protected $postId;
     
     /**
      * @ORM\Column(type="text", name="comment")
      * 
      * @var integer $commentText
      */
     protected $commentText;
     
    public function __construct()
    {
        parent::__construct();
        $this->createdAt = new \DateTime();
        $this->comentCreator = '';
        $this->postId = '';
        $this->commentText = '';
    }
    
    /**
      * Sets when it was created
      * 
      * @param DateTime $value
      */
     public function setDateTime($value)
     {
            $this->createdAt=$value;
     }
     
     /**
      * Gets when the user was created
      * 
      * @return DateTime
      */
     
     public function getCreatedAt()
     {
            return $this->createdAd;
     }
     
     /**
      * Sets the comment creator
      * 
      * @param integer $value
      */	 
     public function setComentCreator($value)
    {
            $this->commentCreator=$value;
    }
    
    /**
     * Gets the comment creator
     * 
     * @return integer 
     */
     public function getCommentCreator()
     {
            return $this->commentCreator;
     }
     
     /**
      * Sets the id of the post this comment belongs to
      * 
      * @param integer $value
      */	 
     public function setPostId($value)
    {
            $this->postId=$value;
    }
    
    /**
     * Gets the id of the post this comment belongs to
     * 
     * @return integer 
     */
     public function getPostId()
     {
            return $this->postId;
     }
     
     /**
      * Sets the text of the comment
      * 
      * @param text $value
      */	 
     public function setCommentText($value)
    {
            $this->commentText=$value;
    }
    
    /**
     * Gets the text of the comment
     * 
     * @return text 
     */
     public function getCommentText()
     {
            return $this->commentText;
     }            
}