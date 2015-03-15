<?php

/* OCPAppliBundle:Train:show.html.twig */
class __TwigTemplate_50f07c4ff8d8eb4479c69f8a4465f6f132f4a0f54b493dfdefc139349d9a209f extends Twig_Template
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
                         <div align=\"center\"><h1>liste des trains</h1></div>
                    <div class=\"well well-small \" align=\"center\">
    <table border=\"1\" width=\"50%\"  class=\"table table-bordered\"
               
              
                    <tr>
                        <th>id</th>
                        <th>numero</th>
                        <th>modifier</th>
                        <th>supprimer</th>
                    </tr>
                    
                   ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["train"]) ? $context["train"] : $this->getContext($context, "train")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 18
            echo "                       
                       <tr class=\"success\">
                           <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "</td>
                           <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "numero", array()), "html", null, true);
            echo "</td>

                           <td><a class=\" btn btn-info\"id=\"editTrain\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_edittrain", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">modifier<a></td>
                                       <td><a class=\" btn btn-danger\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_deletetrain", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">supprimer</td>
                       </tr>
                       
                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    
                        
                    
                </table>
                    </div>
                   
   
            ";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:Train:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  82 => 24,  78 => 23,  73 => 21,  69 => 20,  65 => 18,  61 => 17,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
