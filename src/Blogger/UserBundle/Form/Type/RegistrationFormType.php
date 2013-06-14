<?php
//src/Blogger/UserBundle/Form/Type/RegistrationFormType.php

namespace Blogger\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('first_name');
	$builder->add('last_name');
    }

    public function getName()
    {
        return 'blog_user_registration';
    }
}


