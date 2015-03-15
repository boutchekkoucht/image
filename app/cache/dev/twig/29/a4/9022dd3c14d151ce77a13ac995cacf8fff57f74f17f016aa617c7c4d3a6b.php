<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_29a49022dd3c14d151ce77a13ac995cacf8fff57f74f17f016aa617c7c4d3a6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "   
    <div class=\"col-md-8\">
        
         
        ";
        // line 8
        $this->env->loadTemplate("FOSUserBundle:Profile:show_content.html.twig")->display($context);
        // line 9
        echo "          
        
          
          
          

    </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
