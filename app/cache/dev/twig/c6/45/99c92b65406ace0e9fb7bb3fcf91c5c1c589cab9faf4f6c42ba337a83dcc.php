<?php

/* OCPAppliBundle:analyse:show.html.twig */
class __TwigTemplate_c64599c92b65406ace0e9fb7bb3fcf91c5c1c589cab9faf4f6c42ba337a83dcc extends Twig_Template
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
                        <th>H2O</th>
                        <th>P2O5</th>
                        <th>MgO</th>
                        <th>SiO2</th>
                        <th>Cl-</th>
                        <th>Cd</th>
                        <th></th>
                        <th></th>
                    </tr>
                    
                   ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analyse"]) ? $context["analyse"] : $this->getContext($context, "analyse")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 18
            echo "                       
                       <tr>
                           <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "h2o", array()), "html", null, true);
            echo "</td>
                           <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "p2o5", array()), "html", null, true);
            echo "</td>
                           <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "mgo", array()), "html", null, true);
            echo "</td>
                           <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "sio2", array()), "html", null, true);
            echo "</td>
                           <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "cl", array()), "html", null, true);
            echo "</td>
                           <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "cd", array()), "html", null, true);
            echo "</td>
                           <td><a  href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_editanalyse", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">modifier<a></td>
                           <td><a  href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_deleteanalyse", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">supprimer</td>
                       </tr>
                       
                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    
                        
                    
                </table>
             
            ";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:analyse:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 31,  97 => 27,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  65 => 18,  61 => 17,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
