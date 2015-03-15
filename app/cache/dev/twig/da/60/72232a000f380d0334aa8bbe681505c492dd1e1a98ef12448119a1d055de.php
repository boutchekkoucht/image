<?php

/* OCPAppliBundle:cordes:show.html.twig */
class __TwigTemplate_da6072232a000f380d0334aa8bbe681505c492dd1e1a98ef12448119a1d055de extends Twig_Template
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
                        <th>Point 1</th>
                        <th>Point 2</th>
                        <th>Point 3</th>
                        <th>Point 4</th>
                        <th></th>
                        <th></th>
                    </tr>
                    
                   ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cordes"]) ? $context["cordes"] : $this->getContext($context, "cordes")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 16
            echo "                       
                       <tr>
                           <td>( ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "a", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "b", array()), "html", null, true);
            echo " )</td>
                           <td>( ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "c", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "d", array()), "html", null, true);
            echo " )</td>
                           <td>( ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "e", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "f", array()), "html", null, true);
            echo " )</td>
                           
                           <td>( ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "g", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "h", array()), "html", null, true);
            echo " )</td>
                           <td><a  href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_editCorDes", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">modifier<a></td>
                           <td><a  href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_deleteCorDes", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
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
             
            ";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:cordes:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 28,  96 => 24,  92 => 23,  86 => 22,  79 => 20,  73 => 19,  67 => 18,  63 => 16,  59 => 15,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
