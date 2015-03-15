<?php

/* OCPAppliBundle:analyse:index.html.twig */
class __TwigTemplate_8b5c6b3e08519206c758cc1e42909a07851a0c67200514c17539fa6bc482b480 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("ocp_appli_addanalyse");
        echo "\">ajouter  parc</a><br>
<a  href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("ocp_appli_showanalyse");
        echo "\">affich  prarc</a><br>";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:analyse:index.html.twig";
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
