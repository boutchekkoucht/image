<?php

/* OCPAppliBundle:Analyse:show.html.twig */
class __TwigTemplate_df4dcf8592a1a552bbabfa0126ff60363ba32e2ac246d91f21dfa175b3031c25 extends Twig_Template
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
                     <div align='center'><h1>liste des analyses</h1></div>
                    <div class=\"well well-small \" align=\"center\">
    <table border=\"1\" width=\"50%\"  class=\"table table-bordered\">
                    <tr>
                        <th>id</th>
                        <th>H20</th>
                        <th>P2O5</th>
                        <th>Mgo</th>
                         <th>Sio2</th>
                          <th>CL-</th>
                           <th>CD</th>
                            <th>modifier</th>
                             <th>supprimer</th>
                    </tr>
                    
                   ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analyse"]) ? $context["analyse"] : $this->getContext($context, "analyse")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 21
            echo "                       
                       <tr class=\"success\">
                           <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "</td>
                           <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "h2o", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "p2o5", array()), "html", null, true);
            echo "</td>
                                   <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "mgo", array()), "html", null, true);
            echo "</td>
                                       <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "sio2", array()), "html", null, true);
            echo "</td>
                                           <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "cl", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "cd", array()), "html", null, true);
            echo "</td>
                                           <td><a class=\"btn btn-info\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_editanalyse", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">modifier<a></td>
                                                       <td><a class=\"btn btn-danger\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_deleteanalyse", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">supprimer</td>
                       </tr>
                       
                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "      
                        
                    
                </table>
                    </div>
             
            ";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:Analyse:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 35,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  68 => 21,  64 => 20,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
