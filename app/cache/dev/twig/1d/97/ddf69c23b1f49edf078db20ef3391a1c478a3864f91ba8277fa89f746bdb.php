<?php

/* OCPAppliBundle:melange:show.html.twig */
class __TwigTemplate_1d97ddf69c23b1f49edf078db20ef3391a1c478a3864f91ba8277fa89f746bdb extends Twig_Template
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
        echo "                <br><br><br>   
                <table class='table table-hover'>
                    <tr>
                        <th>destockageId</th>
                        <th>pourcentage</th>
                        <th></th>
                        <th></th>
                    </tr>
                    
                   ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["melange"]) ? $context["melange"] : $this->getContext($context, "melange")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 14
            echo "                       
                       <tr>
                           <td></td>
                           <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "pourcentage", array()), "html", null, true);
            echo "%</td>
                           <td><a  href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_editmelange", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">modifier<a></td>
                           <td><a  href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_deletemelange", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">supprimer</td>
                       </tr>
                       
                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                    
                        
                    
                </table>
             
            ";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:melange:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  74 => 19,  70 => 18,  66 => 17,  61 => 14,  57 => 13,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
