<?php

namespace OCP\AppliBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RechercheparcType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('recherche','text',array('attr'=>array('class'=>'input-medium serach-query')))
        ;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return 'ocp_applibundle_rechercheparc';
    }
}
