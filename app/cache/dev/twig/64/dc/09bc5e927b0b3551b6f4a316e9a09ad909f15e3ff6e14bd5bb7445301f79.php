<?php

/* OCPAppliBundle:Parc:supprimer.html.twig */
class __TwigTemplate_64dc09bc5e927b0b3551b6f4a316e9a09ad909f15e3ff6e14bd5bb7445301f79 extends Twig_Template
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
Etes-vous certain de vouloir supprimer le parc dont le nom est:\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 11
(isset($context["parc"]) ? $context["parc"] : $this->getContext($context, "parc")), "nom", array()), "html", null, true);
        echo "\" ?
</h2>

<form  action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_deleteparc", array("id" => $this->getAttribute((isset($context["parc"]) ? $context["parc"] : $this->getContext($context, "parc")), "id", array()))), "html", null, true);
        echo "\"method=\"post\">

<input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("ocp_appli_showparc");
        echo "\" class=\"btn btn-primary\">Retour</a>

";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>

            </div>  
            ";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:Parc:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  67 => 17,  61 => 14,  55 => 11,  54 => 10,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
