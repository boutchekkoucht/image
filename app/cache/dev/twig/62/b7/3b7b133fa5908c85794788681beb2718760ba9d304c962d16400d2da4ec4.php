<?php

/* OCPAppliBundle:CorDes:show.html.twig */
class __TwigTemplate_62b73b7b133fa5908c85794788681beb2718760ba9d304c962d16400d2da4ec4 extends Twig_Template
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
                <div align='center'><h1>liste des points de destockage</h1></div>
                    <div class=\"well well-small \" align=\"center\">
    <table border=\"1\" width=\"50%\"  class=\"table table-bordered\">
               
                    <tr>
                        <th>Point 1</th>
                        <th>Point 2</th>
                        <th>Point 3</th>
                        <th>Point 4</th>
                        <th>modifier</th>
                        <th>supprimer</th>
                    </tr>
                    
                   ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cordes"]) ? $context["cordes"] : $this->getContext($context, "cordes")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 19
            echo "                       
                       <tr class=\"success\">
                           <td>[ ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "a", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "b", array()), "html", null, true);
            echo " ]</td>
                           <td>[ ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "c", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "d", array()), "html", null, true);
            echo " ]</td>
                           <td>[ ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "e", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "f", array()), "html", null, true);
            echo " ]</td>
                           
                           <td>[ ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "g", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "h", array()), "html", null, true);
            echo " ]</td>
                           <td><a class=\"btn btn-info\"  href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_editCorDes", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">modifier<a></td>
                                       <td><a class=\"btn btn-danger\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ocp_appli_deleteCorDes", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
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
                    </div>
             
            ";
    }

    public function getTemplateName()
    {
        return "OCPAppliBundle:CorDes:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 31,  99 => 27,  95 => 26,  89 => 25,  82 => 23,  76 => 22,  70 => 21,  66 => 19,  62 => 18,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
