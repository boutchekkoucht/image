<?php

namespace OCP\AppliBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class MelangeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pourcentage')
            ->add('terrain','entity',array('class'=>'OCPAppliBundle:terrain','property'=>'id'))
            ->add('des','entity',array('class'=>'OCPAppliBundle:destockage','property'=>'id'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OCP\AppliBundle\Entity\Melange'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ocp_applibundle_melange';
    }
}
