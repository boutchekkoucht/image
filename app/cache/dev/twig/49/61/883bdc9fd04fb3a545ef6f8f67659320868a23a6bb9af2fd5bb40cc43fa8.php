<?php

/* OCPAppliBundle:terrain:index.html.twig */
class __TwigTemplate_4961883bdc9fd04fb3a545ef6f8f67659320868a23a6bb9af2fd5bb40cc43fa8 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("ocp_appli_addterrain");
        echo "\">ajouter  terrain</a><br>
<a  href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("ocp_appli_showterrain");
        echo "\">affich  terrain</a><br>";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:terrain:index.html.twig";
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
