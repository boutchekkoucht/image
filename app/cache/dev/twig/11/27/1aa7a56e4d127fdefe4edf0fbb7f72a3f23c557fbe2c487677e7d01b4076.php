<?php

/* OCPAppliBundle:Parc:index.html.twig */
class __TwigTemplate_11271aa7a56e4d127fdefe4edf0fbb7f72a3f23c557fbe2c487677e7d01b4076 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("ocp_appli_addparc");
        echo "\">ajouter  parc</a><br>
<a  href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("ocp_appli_showparc");
        echo "\">affich  prarc</a><br>";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:Parc:index.html.twig";
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
