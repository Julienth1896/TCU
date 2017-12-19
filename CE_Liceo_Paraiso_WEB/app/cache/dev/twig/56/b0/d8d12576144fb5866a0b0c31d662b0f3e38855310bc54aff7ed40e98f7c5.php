<?php

/* CELiceoParaisoBundle:Administrator:changePassword.html.twig */
class __TwigTemplate_56b0d8d12576144fb5866a0b0c31d662b0f3e38855310bc54aff7ed40e98f7c5 extends Twig_Template
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
        <title>Cambio de clave</title>

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
                            <h1><strong>CELIPA</strong> Cambiar contraseña</h1>
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
                                    <h3>Ingrese los datos</h3>
                                    <p>Su contraseña es temporal por favor ingrese los datos:</p>
                                </div>
                                <div class=\"form-top-right\">
                                    <i class=\"fa fa-key\"></i>
                                </div>
                            </div>
                            <div class=\"form-bottom\">
                                <form role=\"form\" action=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_change_pass");
        echo "\" method=\"post\" class=\"login-form\">
                                    ";
        // line 51
        if (array_key_exists("alert", $context)) {
            // line 52
            echo "                                        <div class=\"alert alert-warning text-center\">
                                            <strong>
                                                <img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/cancel.png"), "html", null, true);
            echo "\"/> 
                                                ";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")), "html", null, true);
            echo "
                                            </strong>
                                        </div>
                                    ";
        }
        // line 59
        echo "                                    <div class=\"form-group\">
                                        <label class=\"sr-only\" for=\"passOld\">Contraseña actual:</label>
                                        <input type=\"password\" name=\"passOld\" class=\"form-username form-control\" id=\"passOld\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["passOld"]) ? $context["passOld"] : $this->getContext($context, "passOld")), "html", null, true);
        echo "\" required>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"sr-only\" for=\"passNew\">Nueva Contraseña:</label>
                                        <input type=\"password\" name=\"passNew\" class=\"form-username form-control\" id=\"passNew\" required>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"sr-only\" for=\"confirmPass\">Confimar Contraseña:</label>
                                        <input type=\"password\" name=\"confirmPass\" class=\"form-username form-control\" id=\"confirmPass\" required>
                                    </div>
                                    <button type=\"submit\" class=\"btn\">Cambiar Contraseña</button>
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
        return "CELiceoParaisoBundle:Administrator:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 61,  109 => 59,  102 => 55,  98 => 54,  94 => 52,  92 => 51,  88 => 50,  55 => 20,  51 => 19,  47 => 18,  41 => 15,  37 => 14,  33 => 13,  19 => 1,);
    }
}
