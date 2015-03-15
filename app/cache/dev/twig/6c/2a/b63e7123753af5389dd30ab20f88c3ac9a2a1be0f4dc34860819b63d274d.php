<?php

/* OCPAppliBundle:Train:ajouter.html.twig */
class __TwigTemplate_6c2ab63e7123753af5389dd30ab20f88c3ac9a2a1be0f4dc34860819b63d274d extends Twig_Template
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
                           
               <button type=\"button\" class=\"btn btn-primary col-lg-offset-5\" data-toggle=\"modal\" data-target=\"#exampleModal\" data-whatever=\"@mdo\">Ajout Train </button>
.

<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h2 class=\"modal-title\" id=\"exampleModalLabel\">Ajout d'un nouvel Train</h2>
         
      </div>
        <div class=\"modal-body\">
        <div class=\"form-group\">
              <form id=\"addtrain\" method=\"post\" ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
      
          
        
            <input type=\"submit\" class=\"btn btn-primary\" />
            
              </form>
          </div>
  </div>
</div>
</div> 
               
             
            
          
             
            
            </div>
            <script>

\$(\"#addtrain\").submit(function(){ 
    
    \$.ajax({
        type: \"POST\",
        url: \"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("ocp_appli_addtrain");
        echo "\",
       
        success: function(data){
          
        }
    });    
    return false;
});
</script>
            ";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:Train:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 44,  67 => 20,  63 => 19,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
