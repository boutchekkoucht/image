<?php

namespace OCP\AppliBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use OCP\AppliBundle\Form\analyseType;
use OCP\AppliBundle\Form\CorDesType;

class editdestockageType extends destockageType
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
        return 'ocp_applibundle_editdestockagetype';
    }
}
