<?php
// src/Blogger/BlogBundle/Form/NewCommentType.php

namespace Blogger\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NewCommentType extends AbstractType
{
    


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
	   $builder->add('post_creator', 'hidden');
	   $builder->add('post_title','text');
	   $builder->add('post_text','textarea');		
    }
    
    public function getName()
    {
        return 'post';
    }
    
   public function getDefaultOptions(array $options)
    {
        /* If this form corresponds to an Entity, we should include it here */
        return array(
            'data_class' => 'Blogger\BlogBundle\Entity\Post',
        );
    }    
}