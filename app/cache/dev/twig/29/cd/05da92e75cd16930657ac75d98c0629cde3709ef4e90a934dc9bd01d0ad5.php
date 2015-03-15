<?php

/* OCPAppliBundle:melange:index.html.twig */
class __TwigTemplate_29cd05da92e75cd16930657ac75d98c0629cde3709ef4e90a934dc9bd01d0ad5 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("ocp_appli_addmelange");
        echo "\">ajouter  melange</a><br>
<a  href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("ocp_appli_showmelange");
        echo "\">affich  melange</a><br>";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:melange:index.html.twig";
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
