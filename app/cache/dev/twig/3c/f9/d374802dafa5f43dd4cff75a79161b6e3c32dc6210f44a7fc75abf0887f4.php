<?php

/* OCPAppliBundle:terrain:show.html.twig */
class __TwigTemplate_3cf9d374802dafa5f43dd4cff75a79161b6e3c32dc6210f44a7fc75abf0887f4 extends Twig_Template
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
                     <div align=\"center\"><h1>Liste des terrains </h1></div>
                     <div class=\"well well-small \" >
                <table class='table table-bordered'>
                    <tr  >
                        <th>debu partie 1</th>
                        <th>fin  partie 1</th>
                        <th>debut  partie 2</th>
                        <th>fin  partie 2</th>
                        <th>hauteur</th>
                        <th>date du recu</th>
                         <th>recu id</th>
                          <th>NumTrain</th><th>H2O</th><th>P2O5</th><th>MgO</th><th>SiO2</th> 
        <th>CL-</th> <th>Cd</th>
 

                        <th>parc id</th>
                     
                     
                        <th>modifier</th>
                        <th>supprimer</th>
                    </tr>
                    
                   ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["terrain"]) ? $context["terrain"] : $this->getContext($context, "terrain")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 28
            echo "                       
                       <tr class=\"success\">
                           <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "p1debut", array()), "html", null, true);
            echo "</td>
                           <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "p1fin", array()), "html", null, true);
            echo "</td>
                           <th>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "p2debut", array()), "html", null, true);
            echo "</th>
                            <th>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "p2fin", array()), "html", null, true);
            echo "</th>
                            <th>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "hauteur", array()), "html", null, true);
            echo "</th>
                            <th>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "recu", array()), "date", array()), "d/m/Y"), "html", null, true);
            echo "</th>
                            <th>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "recu", array()), "id", array()), "html", null, true);
            echo "</th>
                         <td> ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "recu", array()), "analyse", array()), "h2o", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "recu", array()), "analyse", array()), "p2o5", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "recu", array()), "analyse", array()), "mgo", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "recu", array()), "analyse", array()), "sio2", array()), "html", null, true);
            echo "</td> 
        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "recu", array()), "analyse", array()), "cl", array()), "html", null, true);
            echo "</td> <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "recu", array()), "analyse", array()), "cd", array()), "html", null, true);
            echo "</td><td>
                            <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "parc", array()), "id", array()), "html", null, true);
            echo "</th>
               
                            
                            <td><a class=\"btn btn-info\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_editterrain", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">modifier<a></td>
                                        <td><a class=\"btn btn-danger\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_deleteterrain", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">supprimer</td>
                       </tr>
                       
                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    
                        
                    
                </table>
                       </div>
             
            ";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:terrain:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 48,  135 => 44,  131 => 43,  125 => 40,  119 => 39,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  95 => 34,  91 => 33,  87 => 32,  83 => 31,  79 => 30,  75 => 28,  71 => 27,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
