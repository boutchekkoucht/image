<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_71959a69784bbdcad705c96923ca415e4910815a44de1d83f4c0bf2c9c03e5c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" role=\"form\" class=\"well col-md-7 col-md-offset-3 fos_user_resetting_request\">
    <div class=\"form-group\">
        ";
        // line 5
        if (array_key_exists("invalid_username", $context)) {
            // line 6
            echo "            <p  class=\"alert alert-warning\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 8
        echo "        
        <label for=\"username\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" class=\"form-control\"/>
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\"/>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  38 => 9,  35 => 8,  29 => 6,  27 => 5,  22 => 3,  19 => 2,);
    }
}
