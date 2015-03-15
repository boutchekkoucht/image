<?php

/* OCPAppliBundle:Parc:recherche.html.twig */
class __TwigTemplate_4209dc8a5e6d0f473ec77f88299dc7ef29762c5fbeef5a63c41066e895481823 extends Twig_Template
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
   
               
             
                
                                      <div align=\"center\"><h2>
    
       
                 <div align=\"center\"><h1>rechercher un Parc par nom:</h1></div>
            <div class=\"well col-lg-5 col-lg-offset-4\" align=\"center\" >
             
                <form method=\"post\" ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " action=\"";
        echo $this->env->getExtension('routing')->getPath("ocp_appli_recherchetraparc");
        echo "\">
           ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
             
            <input type=\"submit\" value=\"rechercher\" class=\"btn btn-primary\" />
            </form>
            </div>
          
        
          

            </div>  
                                          
        

            ";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:Parc:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  59 => 15,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
