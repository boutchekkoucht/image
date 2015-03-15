<?php

/* OCPAppliBundle:Destockage:modifier.html.twig */
class __TwigTemplate_c6bad0e7048f1cc386ff9c533c308a4cf4eafdc19ef9e26294f0333a84c30782 extends Twig_Template
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
   
               
             
                
         <div align=\"center\"><h1>Modifier un Destockage</h1></div>
            <div class=\"well col-lg-5 col-lg-offset-4\" align=\"center\" >
             
                <form method=\"post\" ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_editdestockage", array("id" => $this->getAttribute((isset($context["destockage"]) ? $context["destockage"] : $this->getContext($context, "destockage")), "id", array()))), "html", null, true);
        echo "\">
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <input type=\"submit\" value=\"modifier\" class=\"btn btn-primary\" />
            </form>
            </div> 
            ";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:Destockage:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  56 => 12,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
