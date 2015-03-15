<?php

namespace OCP\AppliBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use OCP\AppliBundle\Form\analyseType;
use OCP\AppliBundle\Form\CorDesType;

class destockageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('Analyse',new analyseType())
            ->add('coordonnee',new CorDesType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OCP\AppliBundle\Entity\destockage'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ocp_applibundle_destockage';
    }
}
