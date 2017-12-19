<?php

/* CELiceoParaisoBundle:Administrator:login.html.twig */
class __TwigTemplate_274f3e4b04ffe7eb3fc21fc90a4a603a49e757fede65f0ee369ffbf80b936d21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Iniciar Sesión</title>

        <!-- CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Roboto:400,100,300,500\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/login/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/login/css/form-elements.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/login/css/style.css"), "html", null, true);
        echo "\">

        <!-- Javascript -->
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/login/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/login/js/jquery.backstretch.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/login/js/scripts.js"), "html", null, true);
        echo "\"></script>
    </head>

    <body>
        <!-- Top content -->
        <div class=\"top-content\">
            <div class=\"inner-bg\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-8 col-sm-offset-2 text\">
                            <h1><strong>CELIPA</strong> Iniciar Sesión</h1>
                            <div class=\"description\">
                                <p>
                                    Administración del Sitio Web CELIPA (Centro Educativo Liceo Paríso)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-sm-offset-3 form-box\">
                            <div class=\"form-top\">
                                <div class=\"form-top-left\">
                                    <h3>Inicie Sesión</h3>
                                    <p>Ingrese su usuario y contraseña:</p>
                                </div>
                                <div class=\"form-top-right\">
                                    <i class=\"fa fa-key\"></i>
                                </div>
                            </div>
                            <div class=\"form-bottom\">
                                <form role=\"form\" action=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_check_user");
        echo "\" method=\"post\" class=\"login-form\">
                                    ";
        // line 51
        if (array_key_exists("alert", $context)) {
            // line 52
            echo "                                        ";
            if (((isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")) == "error")) {
                // line 53
                echo "                                            <div class=\"alert alert-warning text-center\">
                                                <strong>
                                                    <img src=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/cancel.png"), "html", null, true);
                echo "\"/> 
                                                    Datos inv&aacute;lidos
                                                </strong>
                                            </div>
                                        ";
            }
            // line 60
            echo "                                        ";
            if (((isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")) == "success")) {
                // line 61
                echo "                                            <div class=\"alert alert-success text-center\">
                                                <strong>
                                                    <img src=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/img.png"), "html", null, true);
                echo "\"/> 
                                                    Datos actualizados.
                                                </strong>
                                            </div>
                                        ";
            }
            // line 68
            echo "                                    ";
        }
        // line 69
        echo "                                    <div class=\"form-group\">
                                        <label class=\"sr-only\" for=\"form-username\">Usuario</label>
                                        <input type=\"text\" name=\"form-username\" placeholder=\"Usuario...\" class=\"form-username form-control\" id=\"form-username\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"sr-only\" for=\"form-password\">Contraseña</label>
                                        <input type=\"password\" name=\"form-password\" placeholder=\"Contraseña...\" class=\"form-password form-control\" id=\"form-password\">
                                    </div>
                                    <button type=\"submit\" class=\"btn\">Iniciar Sesión</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class=\"container-fluid text-center\">
            <p>Centro Educativo Liceo de Paraíso</p>
            <p>Trabajo Comunal Universitario - UCR - 2017</p>
        </footer>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "CELiceoParaisoBundle:Administrator:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 69,  124 => 68,  116 => 63,  112 => 61,  109 => 60,  101 => 55,  97 => 53,  94 => 52,  92 => 51,  88 => 50,  55 => 20,  51 => 19,  47 => 18,  41 => 15,  37 => 14,  33 => 13,  19 => 1,);
    }
}
