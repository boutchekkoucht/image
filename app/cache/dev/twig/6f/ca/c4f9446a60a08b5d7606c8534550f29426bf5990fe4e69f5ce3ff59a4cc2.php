<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6fcac4f9446a60a08b5d7606c8534550f29426bf5990fe4e69f5ce3ff59a4cc2 extends Twig_Template
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

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"col-md-3\"></div>
<div class=\"container   col-md-5 well \">
<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\"  >
    <legend class=\"text-center\">
        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/photo.gif"), "html", null, true);
        echo "\" class=\"img-circle img-rounded\" alt=\"login\"></img>
    </legend>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    <div  class=\"form-group\">
        
    <label for=\"username\"  >";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\"  placeholder=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
    </div>
    <div  class=\"form-group\">
    <label for=\"password\" >";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" placeholder=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" />
    </div>
    <div class=\"form-group\">
        <div class=\"col-md-offset-3\">
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        </div>
    </div>
    <div class=\"input-group col-md-6 col-md-offset-3\">
    <input type=\"submit\"  class=\"btn btn-primary btn-block \" id=\"_submit\" name=\"_submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    
    </div>
       ";
        // line 32
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 33
            echo "           <br>
            <p  class=\"alert alert-danger text-center\"  role=\"alert\"  >               
                ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "  
               
            </p>
            
             <a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
            echo "\">Mot  passe perdu ?</a>
              
     ";
        }
        // line 42
        echo "     
     
 </div>
        
    
 
    
</div>
<div class=\"col-md-3\">
 
</div>   
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 42,  110 => 39,  103 => 35,  99 => 33,  97 => 32,  91 => 29,  84 => 25,  76 => 20,  72 => 19,  64 => 16,  60 => 15,  54 => 12,  49 => 10,  44 => 8,  39 => 5,  36 => 4,  11 => 1,);
    }
}
