<?php

/* OCPAppliBundle:Train:search.html.twig */
class __TwigTemplate_c313ebddd1c027aa9c3eee20fb20254802f31d8f44dcf4009eb974b1c2e0acbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("OCPAppliBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPAppliBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "                <hiho
            ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["reselt"]) ? $context["reselt"] : $this->getContext($context, "reselt")), "html", null, true);
        echo "  
            
            ";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:Train:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
