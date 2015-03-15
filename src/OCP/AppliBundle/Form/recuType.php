<?php

namespace OCP\AppliBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use OCP\AppliBundle\Form\analyseType;
use OCP\AppliBundle\Entity\trainRepository;


class recuType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('tonnage')
            ->add('train','entity',array('class'=>'OCPAppliBundle:train','property'=>'numero','query_builder' => function(trainRepository $er)
            {
            return $er->getTrain(31);
            }
              
           
            ))
            ->add('analyse',new analyseType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OCP\AppliBundle\Entity\recu'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ocp_applibundle_recu';
    }
}
