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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/css/login/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/css/login/form-elements.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/css/login/style.css"), "html", null, true);
        echo "\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

        <!-- Javascript -->
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/js/login/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/js/login/jquery.backstretch.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/js/login/scripts.js"), "html", null, true);
        echo "\"></script>
    </head>

    <body>
        <!-- Top content -->
        <div class=\"top-content\">

            <div class=\"inner-bg\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-8 col-sm-offset-2 text\">
                            <h1><strong>Bootstrap</strong> Login Form</h1>
                            <div class=\"description\">
                                <p>
                                    This is a free responsive login form made with Bootstrap. 
                                    Download it on <a href=\"http://azmind.com\"><strong>AZMIND</strong></a>, customize and use it as you like!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-sm-offset-3 form-box\">
                            <div class=\"form-top\">
                                <div class=\"form-top-left\">
                                    <h3>Login to our site</h3>
                                    <p>Enter your username and password to log on:</p>
                                </div>
                                <div class=\"form-top-right\">
                                    <i class=\"fa fa-key\"></i>
                                </div>
                            </div>
                            <div class=\"form-bottom\">
                                <form role=\"form\" action=\"\" method=\"post\" class=\"login-form\">
                                    <div class=\"form-group\">
                                        <label class=\"sr-only\" for=\"form-username\">Username</label>
                                        <input type=\"text\" name=\"form-username\" placeholder=\"Username...\" class=\"form-username form-control\" id=\"form-username\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"sr-only\" for=\"form-password\">Password</label>
                                        <input type=\"password\" name=\"form-password\" placeholder=\"Password...\" class=\"form-password form-control\" id=\"form-password\">
                                    </div>
                                    <button type=\"submit\" class=\"btn\">Sign in!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-sm-offset-3 social-login\">
                            <h3>...or login with:</h3>
                            <div class=\"social-login-buttons\">
                                <a class=\"btn btn-link-1 btn-link-1-facebook\" href=\"#\">
                                    <i class=\"fa fa-facebook\"></i> Facebook
                                </a>
                                <a class=\"btn btn-link-1 btn-link-1-twitter\" href=\"#\">
                                    <i class=\"fa fa-twitter\"></i> Twitter
                                </a>
                                <a class=\"btn btn-link-1 btn-link-1-google-plus\" href=\"#\">
                                    <i class=\"fa fa-google-plus\"></i> Google Plus
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        return array (  62 => 27,  58 => 26,  54 => 25,  41 => 15,  37 => 14,  33 => 13,  19 => 1,);
    }
}
