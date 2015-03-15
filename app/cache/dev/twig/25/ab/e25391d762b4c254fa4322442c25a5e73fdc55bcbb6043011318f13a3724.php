<?php

/* OCPAppliBundle:cordes:supprimer.html.twig */
class __TwigTemplate_25abe25391d762b4c254fa4322442c25a5e73fdc55bcbb6043011318f13a3724 extends Twig_Template
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
   
               
             
                
            <div class=\"well\" align=\"center\">
             
                <form method=\"post\" ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_deleteCorDes", array("id" => $this->getAttribute((isset($context["cordes"]) ? $context["cordes"] : $this->getContext($context, "cordes")), "id", array()))), "html", null, true);
        echo "\" role=\"form\"  class=\"col-md-6 col-md-offset-4\">
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            
            
            <input type=\"submit\"  name=\"rep\" value='oui' class=\"btn btn-primary\" />
            <input type=\"submit\"  name=\"rep\" value='non' class=\"btn btn-primary\" />
            </form>
            </div>  
            ";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:cordes:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  55 => 11,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
