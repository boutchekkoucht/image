<?php

/* ::base.html.twig */
class __TwigTemplate_3a80c7de3095ceb49ea90fecc2876557aedc624edfeb57ec686d6ab3c02458f2 extends Twig_Template
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
                 <a class=\"btn btn-success\" href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Accueil</a>
                       
                    </li>
                           <li  class=\"col-md-offset-1\">
                        
                          <div  class=\"dropdown btn-block\">
                               <button class=\"btn btn-success\" class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-expanded=\"true\">

                                Stockage
                                <span class=\"caret\" aria-hidden=\"true\"></span>

                            </button>
                               <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("ocp_appli_addparc");
            echo "\">ajouter parc</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("ocp_appli_addanalyse");
            echo "\">ajouter Analyse</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("ocp_appli_addtrain");
            echo "\">ajouter Train</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("ocp_appli_addrecu");
            echo "\">ajouter Recu</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">afficher</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">chercher</a></li>
                                
                               </ul>
                    </li>
                    <li >
                        
                          <div class=\"dropdown btn-block col-md-12\">
                               <button   class=\"btn btn-success\" class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-expanded=\"true\">

                                Destockage
                                <span class=\"caret\" aria-hidden=\"true\"></span>

                            </button>
                               <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("ocp_appli_addrecu");
            echo "\">ajouter Recu</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("ocp_appli_addterrain");
            echo "\">ajouter Terrain</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("ocp_appli_adddestockage");
            echo "\">ajouter Destockage</a></li>
                                  <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("ocp_appli_addCorDes");
            echo "\">ajouter Coordonnées</a></li>
                                
                               </ul>
                    </li>
                    <li>
                                       
        <img src=\"/ocp1/web/img/photo.gif\" class=\"img-circle img-rounded\" alt=\"login\">
        </li>
                    <li>
                        
                          <div class=\"dropdown btn-block col-md-12\">
                               <button  class=\"btn btn-success\" class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-expanded=\"true\">

                                Lavage
                                <span class=\"caret\" aria-hidden=\"true\"></span>

                            </button>
                               <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 82
            echo $this->env->getExtension('routing')->getPath("ocp_appli_addrecu");
            echo "\">ajouter</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("ocp_appli_addrecu");
            echo "\">afficher</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("ocp_appli_addrecu");
            echo "\">chercher</a></li>
                                
                               </ul>
                    </li>
                    <li>
                        
                          <div class=\"dropdown btn-block col-md-12\">
                               <button  class=\"btn btn-success\" class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-expanded=\"true\">

                                Expedition
                                <span class=\"caret\" aria-hidden=\"true\"></span>

                            </button>
                               <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 98
            echo $this->env->getExtension('routing')->getPath("ocp_appli_addrecu");
            echo "\">ajouter</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("ocp_appli_addrecu");
            echo "\">afficher</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 100
            echo $this->env->getExtension('routing')->getPath("ocp_appli_addrecu");
            echo "\">chercher</a></li>
                                
                               </ul>
                          </li>
                         <li  class=\" col-md-offset-3\">
                        <div class=\"dropdown btn-block col-md-12  \">
                            <button class=\"btn btn-success\"  class=\"btn btn-default dropdown-toggle \" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-expanded=\"true\">

                                ";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                                <span class=\"caret \" aria-hidden=\"true\"></span>

                            </button>
                            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 113
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Deconncter</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 114
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Mon Compte</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 115
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Mis a jours</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 116
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">changer mot passe</a></li>

                            </ul>
                        




                    </li>
                ";
        } else {
            // line 126
            echo "                    <li>
                       <a href=\"";
            // line 127
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                        
                    </li>
                    <li>
                        <a href=\"";
            // line 131
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    </li>



                ";
        }
        // line 136
        echo " 

            </ul>
             </div>
            </br>

        </div>

       
               
            

                    ";
        // line 148
        $this->displayBlock('body', $context, $blocks);
        // line 151
        echo "



                    ";
        // line 155
        $this->displayBlock('javascripts', $context, $blocks);
        // line 166
        echo "
                    <script type=\"text/javascript\">
                        \$(document).ready(function () {
                    ";
        // line 169
        $this->displayBlock('document_ready', $context, $blocks);
        // line 170
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

    // line 148
    public function block_body($context, array $blocks = array())
    {
        // line 149
        echo "
                    ";
    }

    // line 155
    public function block_javascripts($context, array $blocks = array())
    {
        // line 156
        echo "                        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "94a7b44_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_94a7b44_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/94a7b44_jquery_1.js");
            // line 162
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
        // line 165
        echo "                    ";
    }

    // line 169
    public function block_document_ready($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 169,  368 => 165,  345 => 162,  340 => 156,  337 => 155,  332 => 149,  329 => 148,  324 => 15,  318 => 14,  315 => 13,  308 => 14,  305 => 13,  299 => 14,  296 => 13,  290 => 14,  287 => 13,  283 => 7,  280 => 6,  277 => 5,  271 => 4,  263 => 170,  261 => 169,  256 => 166,  254 => 155,  248 => 151,  246 => 148,  232 => 136,  221 => 131,  212 => 127,  209 => 126,  196 => 116,  192 => 115,  188 => 114,  184 => 113,  176 => 108,  165 => 100,  161 => 99,  157 => 98,  140 => 84,  136 => 83,  132 => 82,  111 => 64,  107 => 63,  103 => 62,  99 => 61,  80 => 45,  76 => 44,  72 => 43,  68 => 42,  52 => 29,  49 => 28,  47 => 27,  35 => 17,  33 => 5,  29 => 4,  24 => 1,);
    }
}
