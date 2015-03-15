<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_6f2becba3edf48a1d0c050b720c98c722e5a1a2fc1a137f1b37444affb4a3435 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "        
            ";
        // line 4
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "                 
                ";
            // line 9
            echo "             
            ";
        }
        // line 11
        echo "   

        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 14
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 15
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo " alert  alert-success\" role=\"alert\">
                    ";
                // line 16
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
        <div>
            ";
        // line 22
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 24
        echo "        </div>
 ";
    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 23
        echo "            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 23,  96 => 22,  91 => 24,  89 => 22,  85 => 20,  79 => 19,  70 => 16,  65 => 15,  60 => 14,  56 => 13,  52 => 11,  48 => 9,  45 => 5,  43 => 4,  40 => 3,  37 => 2,  11 => 1,);
    }
}
