<?php

/* OCPAppliBundle:Destockage:index.html.twig */
class __TwigTemplate_18c521503f7a639491cb75b0df4eba6ac88257b01fdc1bf59437798a3e2b336a extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("ocp_appli_adddestockage");
        echo "\">ajouter  destockage</a><br>
<a  href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("ocp_appli_showdestockage");
        echo "\">affich  destockage</a><br>";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:Destockage:index.html.twig";
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
