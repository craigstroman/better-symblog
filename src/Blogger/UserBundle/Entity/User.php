<?php
// src/Blogger/UserBundle/Entity/User.php

namespace Blogger\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
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
     * @ORM\Column(type="string", length=100)
     *
     * @var string $first_name 
     */
    protected $first_name;
    
    /**
     * @ORM\Column(type="string", length=100)
     *
     * @var string $last_name
     */
     protected $last_name;  

    public function __construct()
    {
        parent::__construct();
        $this->created_at = new \DateTime();
        $this->first_name = '';
        $this->last_name = '';
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
      * Sets the first name.
      * 
      * @param string $value
      */	 
     public function setFirstName($value)
    {
            $this->first_name=$value;
    }
    
    /**
     * Gets the first name
     * 
     * @return string 
     */
     public function getFirstName()
     {
            return $this->first_name;
     }
     
     /**
      * Sets the last name
      * 
      * @param string $value
      */
     public function setLastName($value)
     {
            $this->last_name = $value;
     }
     
     /**
      * Gets the last name
      * 
      * @return string
      */
     public function getLastName()
     {
            return $this->last_name;
     }                      
}