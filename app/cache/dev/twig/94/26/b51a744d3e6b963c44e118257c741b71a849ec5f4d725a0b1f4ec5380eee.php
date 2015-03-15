<?php

/* base.html.twig */
class __TwigTemplate_9426b51a744d3e6b963c44e118257c741b71a849ec5f4d725a0b1f4ec5380eee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'document_ready' => array($this, 'block_document_ready'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "


    </head>
    <body class=\"container\">
        <link rel=\"icon\" type=\"img/jpg\" href=\"fonts/index.jpg\" />
        <div  class=\" row\">
            <ul class=\"nav nav-tabs navbar-inverse\">
                 
                     
                ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 28
            echo "                    <li>
                        <a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Accueil</a>
                       
                    </li>
                    <li  class=\"col-md-offset-1\">
                        
                          <div class=\"dropdown btn-block\">
                               <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-expanded=\"true\">

                                Stockage
                                <span class=\"caret\" aria-hidden=\"true\"></span>

                            </button>
                               <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("ocp_appli_ajouter");
            echo "\">ajouter</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("ocp_appli_afficher");
            echo "\">afficher</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("ocp_appli_rechercher");
            echo "\">chercher</a></li>
                                
                               </ul>
                    </li>
                    <li>
                        
                          <div class=\"dropdown btn-block col-md-12\">
                               <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-expanded=\"true\">

                                destockage
                                <span class=\"caret\" aria-hidden=\"true\"></span>

                            </button>
                               <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("ocp_appli_ajouter");
            echo "\">ajouter</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("ocp_appli_afficher");
            echo "\">afficher</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("ocp_appli_rechercher");
            echo "\">chercher</a></li>
                                
                               </ul>
                    </li>
                    <li>
                        
                          <div class=\"dropdown btn-block col-md-12\">
                               <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-expanded=\"true\">

                                lavage
                                <span class=\"caret\" aria-hidden=\"true\"></span>

                            </button>
                               <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("ocp_appli_ajouter");
            echo "\">ajouter</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("ocp_appli_afficher");
            echo "\">afficher</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("ocp_appli_rechercher");
            echo "\">chercher</a></li>
                                
                               </ul>
                    </li>
                    <li>
                        
                          <div class=\"dropdown btn-block col-md-12\">
                               <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-expanded=\"true\">

                                expedition
                                <span class=\"caret\" aria-hidden=\"true\"></span>

                            </button>
                               <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("ocp_appli_ajouter");
            echo "\">ajouter</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 91
            echo $this->env->getExtension('routing')->getPath("ocp_appli_afficher");
            echo "\">afficher</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 92
            echo $this->env->getExtension('routing')->getPath("ocp_appli_rechercher");
            echo "\">chercher</a></li>
                                
                               </ul>
                          </li>
                    <li  class=\" col-md-offset-3\">
                        <div class=\"dropdown btn-block col-md-12  \">
                            <button class=\"btn btn-default dropdown-toggle \" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-expanded=\"true\">

                                ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                                <span class=\"caret \" aria-hidden=\"true\"></span>

                            </button>
                            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 105
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Deconncter</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 106
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Mon Compte</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 107
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Mis a jours</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 108
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">changer mot passe</a></li>

                            </ul>
                        




                    </li>   
                    
                ";
        } else {
            // line 119
            echo "                    <li>
                       <a href=\"";
            // line 120
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                        
                    </li>
                    <li>
                        <a href=\"";
            // line 124
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    </li>



                ";
        }
        // line 129
        echo " 

            </ul>
             </div>
            </br>

        </div>

       
               
            

                    ";
        // line 141
        $this->displayBlock('body', $context, $blocks);
        // line 144
        echo "



                    ";
        // line 148
        $this->displayBlock('javascripts', $context, $blocks);
        // line 159
        echo "
                    <script type=\"text/javascript\">
                        \$(document).ready(function () {
                    ";
        // line 162
        $this->displayBlock('document_ready', $context, $blocks);
        // line 163
        echo "                        });
                </script>
        </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Gestion  De  Stockage ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "
            ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a002e74_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a002e74_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/a002e74_bootstrap_1.css");
            // line 13
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "a002e74_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a002e74_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/a002e74_bootstrap-theme.min_2.css");
            // line 13
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "a002e74_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a002e74_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/a002e74_bootstrap.min_3.css");
            // line 13
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "a002e74"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a002e74") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/a002e74.css");
            // line 13
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "  
        ";
    }

    // line 141
    public function block_body($context, array $blocks = array())
    {
        // line 142
        echo "
                    ";
    }

    // line 148
    public function block_javascripts($context, array $blocks = array())
    {
        // line 149
        echo "                        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "94a7b44_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_94a7b44_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/94a7b44_jquery_1.js");
            // line 155
            echo "                        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

                        ";
            // asset "94a7b44_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_94a7b44_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/94a7b44_bootstrap.min_2.js");
            echo "                        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

                        ";
        } else {
            // asset "94a7b44"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_94a7b44") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/94a7b44.js");
            echo "                        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

                        ";
        }
        unset($context["asset_url"]);
        // line 158
        echo "                    ";
    }

    // line 162
    public function block_document_ready($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 162,  355 => 158,  332 => 155,  327 => 149,  324 => 148,  319 => 142,  316 => 141,  311 => 15,  305 => 14,  302 => 13,  295 => 14,  292 => 13,  286 => 14,  283 => 13,  277 => 14,  274 => 13,  270 => 7,  267 => 6,  264 => 5,  258 => 4,  250 => 163,  248 => 162,  243 => 159,  241 => 148,  235 => 144,  233 => 141,  219 => 129,  208 => 124,  199 => 120,  196 => 119,  182 => 108,  178 => 107,  174 => 106,  170 => 105,  162 => 100,  151 => 92,  147 => 91,  143 => 90,  126 => 76,  122 => 75,  118 => 74,  101 => 60,  97 => 59,  93 => 58,  76 => 44,  72 => 43,  68 => 42,  52 => 29,  49 => 28,  47 => 27,  35 => 17,  33 => 5,  29 => 4,  24 => 1,);
    }
}
