<?php

namespace OCP\AppliBundle\Form;


use Symfony\Component\Form\FormBuilderInterface;


class EditparcType extends ParcType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
    }
    
    /**
   
    /**
     * @return string
     */
    public function getName()
    {
        return 'ocp_applibundle_editparctype';
    }
}
