<?php

/* OCPAppliBundle:recu:show.html.twig */
class __TwigTemplate_e3764473e68a4ae1bb6f873457c3ece948bb0da85ab51de696c2ce1bfd36de4f extends Twig_Template
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
        echo "                  <div align=\"center\"><h1>Liste des recus </h1></div>
                <div class=\"well well-small \" align=\"center\">
    <table border=\"1\" width=\"50%\"  class=\"table table-bordered\">
         <th>NumTrain</th><th>H2O</th><th>P2O5</th><th>MgO</th><th>SiO2</th> 
        <th>CL-</th> <th>Cd</th><th>modifier</th><th>supprimer</th>
    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recu"]) ? $context["recu"] : $this->getContext($context, "recu")));
        foreach ($context['_seq'] as $context["_key"] => $context["rc"]) {
            // line 10
            echo "    <tr  class=\"success\"> <td> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rc"], "train", array()), "numero", array()), "html", null, true);
            echo "</td><td> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rc"], "analyse", array()), "h2o", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rc"], "analyse", array()), "p2o5", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rc"], "analyse", array()), "mgo", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rc"], "analyse", array()), "sio2", array()), "html", null, true);
            echo "</td> 
        <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rc"], "analyse", array()), "cl", array()), "html", null, true);
            echo "</td> <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rc"], "analyse", array()), "cd", array()), "html", null, true);
            echo "</td><td><a class=\"btn btn-info\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_editrecu", array("id" => $this->getAttribute($context["rc"], "id", array()))), "html", null, true);
            echo "\">

modifier
</a>
        </td><td>
            <a class=\"btn btn-danger\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_deleterecu", array("id" => $this->getAttribute($context["rc"], "id", array()))), "html", null, true);
            echo "\">Supprimer </a>
       
        
        
        </td>
    
    </tr>
       
    


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  
</table>
</div>
             
            ";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:recu:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 28,  84 => 17,  72 => 12,  64 => 11,  57 => 10,  53 => 9,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
