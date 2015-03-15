<?php

/* OCPAppliBundle:Parc:afficheRecherche.html.twig */
class __TwigTemplate_72f2223bc53e77105a60133a18854478d9376d140bdc0c3e6fd02adbb258b6fe extends Twig_Template
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
                   <div align=\"center\"><h1>liste des trouvés</h1></div>
                    <div class=\"well well-small \" align=\"center\">
    <table border=\"1\" width=\"50%\"  class=\"table table-bordered\">
                    <tr>
                        <th>id</th>
                        <th>nom</th>
                        <th>modifier</th>
                        <th>supprimer</th>
                          <th>imprimer</th>
                    </tr>
                    
                   ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parc"]) ? $context["parc"] : $this->getContext($context, "parc")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 17
            echo "                       
                       <tr class=\"success\">
                           <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "</td>
                           <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", array()), "html", null, true);
            echo "</td>
                           <td><a class=\"btn btn-info\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_editparc", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">modifier<a></td>
                                       <td><a class=\"btn btn-danger\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_deleteparc", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">supprimer</td>
                       </tr>
                       
                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                    
                        
                    
                </table>
                    </div>
           
       
            ";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:Parc:afficheRecherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  80 => 22,  76 => 21,  72 => 20,  68 => 19,  64 => 17,  60 => 16,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
