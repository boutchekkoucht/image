<?php

/* OCPAppliBundle:Destockage:ajouter.html.twig */
class __TwigTemplate_8822de1fd32af1ff998257b1d484a0a9d54e084b83c50777cac5b6be682ae6d6 extends Twig_Template
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
        echo "         
                        <div class=\"row\">
   
                            <button type=\"button\"  class=\"btn btn-primary  col-lg-offset-5\" data-toggle=\"modal\" data-target=\"#exampleModal\" data-whatever=\"@mdo\">Ajout d'un nouvel Destockage </button>
.

<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h2 class=\"modal-title\" id=\"exampleModalLabel\">Ajout d'un nouvel Destockage</h2>
         
      </div>
        <div class=\"modal-body\">
        <div class=\"form-group\">
              <form method=\"post\" ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " action=\"";
        echo $this->env->getExtension('routing')->getPath("ocp_appli_adddestockage");
        echo "\" >
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
      
          
        
            <input type=\"submit\" class=\"btn btn-primary\" value=\"ajouter\" />
            
              </form>
          </div>
  </div>
</div>
</div>      
   
             
   
             
             
            ";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:Destockage:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 21,  64 => 20,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
