<?php

namespace OCP\AppliBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use OCP\AppliBundle\Form\recuType;
use OCP\AppliBundle\Form\ParcType;

class terrainType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('p1debut')
            ->add('p1fin')
            ->add('p2debut')
            ->add('p2fin')
            ->add('hauteur')
            ->add('recu',new recuType())
            ->add('Parc','entity',array('class'=>'OCPAppliBundle:Parc','property'=>'nom'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OCP\AppliBundle\Entity\terrain'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ocp_applibundle_terrain';
    }
}
