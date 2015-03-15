<?php

namespace OCP\AppliBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use OCP\AppliBundle\Form\trainType;
use OCP\AppliBundle\Form\analyseType;

class RechrecuType extends recuType
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
     * @return string
     */
    public function getName()
    {
        return 'ocp_applibundle_rechrecutype';
    }
}
