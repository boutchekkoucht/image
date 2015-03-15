<?php

namespace OCP\AppliBundle\Form;


use Symfony\Component\Form\FormBuilderInterface;
use OCP\AppliBundle\Form\analyseType;
class EditAnalyseType extends analyseType
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
        return 'ocp_applibundle_editanalysetype';
    }
}
