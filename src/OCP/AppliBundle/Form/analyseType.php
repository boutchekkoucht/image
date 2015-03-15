<?php

namespace OCP\AppliBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class analyseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('h2o')
            ->add('p2o5')
            ->add('mgo')
            ->add('sio2')
            ->add('cl')
            ->add('cd')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OCP\AppliBundle\Entity\analyse'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ocp_applibundle_analyse';
    }
}
