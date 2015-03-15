<?php

/* OCPAppliBundle::layout.html.twig */
class __TwigTemplate_c878ed12ce9a1483421d308c6d7ce41fdf70298c57496a19b1f8d7e9799139a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'ocp_body' => array($this, 'block_ocp_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "

";
        // line 6
        $this->displayBlock('ocp_body', $context, $blocks);
    }

    public function block_ocp_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 4,  37 => 3,  11 => 1,);
    }
}
