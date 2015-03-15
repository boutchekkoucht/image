<?php

namespace OCP\AppliBundle\Form;


use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use OCP\AppliBundle\Form\MelangeType;
class EditMelangeType extends MelangeType
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
        return 'ocp_applibundle_editmelangetype';
    }
}
