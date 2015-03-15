<?php

/* OCPAppliBundle:train:modifier.html.twig */
class __TwigTemplate_60b8481891e8e0f560f490f797c9a0d7cfc317af1edd03205f3fb121840adf9b extends Twig_Template
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
        echo "                        <div class=\"row\">
                            
   
               
             
                
            <div align=\"center\"><h1>Modifier un Train</h1></div>
            <div class=\"well col-lg-5 col-lg-offset-4\" align=\"center\" >
             
                <form method=\"post\" ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_edittrain", array("id" => $this->getAttribute((isset($context["train"]) ? $context["train"] : $this->getContext($context, "train")), "id", array()))), "html", null, true);
        echo "\">
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <input type=\"submit\" value=\"modifier\" class=\"btn btn-primary\" />
            </form>
            </div>  
            ";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:train:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  57 => 13,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
