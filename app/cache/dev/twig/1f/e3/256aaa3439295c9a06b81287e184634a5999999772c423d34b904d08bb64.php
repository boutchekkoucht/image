<?php

/* OCPAppliBundle:Train:index.html.twig */
class __TwigTemplate_1fe3256aaa3439295c9a06b81287e184634a5999999772c423d34b904d08bb64 extends Twig_Template
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
        echo "<a  href=\"";
        echo $this->env->getExtension('routing')->getPath("ocp_appli_addtrain");
        echo "\">ajouter  train</a><br>
<a  href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("ocp_appli_showtrain");
        echo "\">affich  train</a><br>
<input  type=\"text\"  id=\"rech\" class=\"form-control\">
<script  src=\"js/jquery.js\">
    
<script  type=\"text/javascript\">
 
    
    jQuery('#rech').keyup( function (){
                jQuery.ajax({
                    
                type:'GET',
                url : \"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("ocp_appli_serachtrain");
        echo "\",
                data : 'nom = '+\$('#rech').val(),
                success :function (data){
                     jQuery('#rep').html(data);
                    
            },
            error :function(){
                alert(\"ops\");
            }
        });
            
});
    
    </script>
  
<br>
<div  id=\"rep\" class=\"well\">
   
</div>
";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:Train:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  51 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
