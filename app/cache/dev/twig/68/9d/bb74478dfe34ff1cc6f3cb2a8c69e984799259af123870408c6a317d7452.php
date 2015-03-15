<?php

/* OCPAppliBundle:Destockage:supprimer.html.twig */
class __TwigTemplate_689dbb74478dfe34ff1cc6f3cb2a8c69e984799259af123870408c6a317d7452 extends Twig_Template
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
Etes-vous certain de vouloir supprimer le Destockage dont le numero est:\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 12
(isset($context["destockage"]) ? $context["destockage"] : $this->getContext($context, "destockage")), "id", array()), "html", null, true);
        echo "\" ?
</h2>

<form  action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_deletedestockage", array("id" => $this->getAttribute((isset($context["destockage"]) ? $context["destockage"] : $this->getContext($context, "destockage")), "id", array()))), "html", null, true);
        echo "\"method=\"post\">

<input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("ocp_appli_showtrain");
        echo "\" class=\"btn btn-primary\">Retour</a>

";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>

            </div>  
            ";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:Destockage:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  68 => 18,  62 => 15,  56 => 12,  55 => 11,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
