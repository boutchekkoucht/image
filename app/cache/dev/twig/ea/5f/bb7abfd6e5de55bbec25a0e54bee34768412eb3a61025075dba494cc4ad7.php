<?php

/* OCPAppliBundle:recu:index.html.twig */
class __TwigTemplate_ea5fbb7abfd6e5de55bbec25a0e54bee34768412eb3a61025075dba494cc4ad7 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("ocp_appli_addrecu");
        echo "\">ajouter  Recu</a><br>
<a  href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("ocp_appli_showrecu");
        echo "\">affich  Recu</a><br>";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:recu:index.html.twig";
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
