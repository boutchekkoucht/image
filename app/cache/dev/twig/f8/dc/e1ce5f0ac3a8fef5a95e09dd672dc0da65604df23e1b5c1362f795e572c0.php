<?php

/* OCPAppliBundle:cordes:index.html.twig */
class __TwigTemplate_f8dce1ce5f0ac3a8fef5a95e09dd672dc0da65604df23e1b5c1362f795e572c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<a  href=\"";
        echo $this->env->getExtension('routing')->getPath("ocp_appli_addCorDes");
        echo "\">ajouter  coordonnées</a><br>
<a  href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("ocp_appli_showCorDes");
        echo "\">affich  coordonnées</a><br>";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:cordes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
