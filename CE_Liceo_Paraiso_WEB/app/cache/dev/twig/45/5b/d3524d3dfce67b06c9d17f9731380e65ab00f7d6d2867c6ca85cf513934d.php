<?php

/* CELiceoParaisoBundle::administration_view.html.twig */
class __TwigTemplate_455bd3524d3dfce67b06c9d17f9731380e65ab00f7d6d2867c6ca85cf513934d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'modals' => array($this, 'block_modals'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        ";
        // line 7
        echo "        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
        <title>CELIPA Admin</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name=\"viewport\" content=\"width=device-width\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDjY6bb7os43WpETqE-dSKsGkLF1wTzqYk&callback\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <!-- Animation library for notifications   -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <!--  Paper Dashboard core CSS    -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/css/paper-dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/css/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

        <!--  Fonts and icons-->
        <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/css/themify-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!--   Core JS Files  -->
        <!--  Checkbox, Radio & Switch Plugins -->
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/js/bootstrap-checkbox-radio.js"), "html", null, true);
        echo "\"></script>
        <!--  Charts Plugin -->
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/js/chartist.min.js"), "html", null, true);
        echo "\"></script>
        <!--  Notifications Plugin    -->
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/js/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>
        <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/js/paper-dashboard.js"), "html", null, true);
        echo "\"></script>
        <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/js/demo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/admin/js/functions.js"), "html", null, true);
        echo "\"></script>

        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    </head>
    <body>
        <div class=\"wrapper\">
            <div class=\"sidebar\" data-background-color=\"black\" data-active-color=\"primary\">
                <div class=\"sidebar-wrapper\" >
                    <div class=\"logo active\">
                        <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_dashboard");
        echo "\" class=\"simple-text\">
                            CELIPA Admin
                        </a>
                    </div>
                    <ul class=\"nav\">
                        ";
        // line 53
        $this->displayBlock('menu', $context, $blocks);
        // line 54
        echo "                    </ul>
                </div>
            </div>

            <div class=\"main-panel\">
                <nav class=\"navbar navbar-ct-primary\">
                    <div class=\"container-fluid\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar bar1\"></span>
                                <span class=\"icon-bar bar2\"></span>
                                <span class=\"icon-bar bar3\"></span>
                            </button>
                            <a class=\"navbar-brand\" href=\"#\">";
        // line 68
        $this->displayBlock('title', $context, $blocks);
        echo "</a>
                        </div>
                        <div class=\"collapse navbar-collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li>
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                        <i class=\"ti-user\"></i>
                                        <p>Perfil</p>
                                    </a>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                        <i class=\"ti-settings\"></i>
                                        <p>Configuración</p>
                                        <b class=\"caret\"></b>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_change_pass_form");
        echo "\">Cambiar clave</a></li>
                                        <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_logout");
        echo "\">Cerrar Sesión</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class=\"content\">
                    <div class=\"container-fluid\">
                        ";
        // line 95
        $this->displayBlock('content', $context, $blocks);
        // line 96
        echo "                    </div>
                </div>
                <footer class=\"footer\">
                    <div class=\"container-fluid\">
                        <nav class=\"pull-left\">
                            <ul>
                                <li>
                                    <a href=\"#\">
                                        <b>Trabajo Comunal Universitario 563 - UCR, Sede del Atlántico, Recinto Paraíso</b>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class=\"copyright pull-right\">
                            &copy; <script>document.write(new Date().getFullYear());</script>, Proyecto TCU - <a href=\"https://www.ucr.ac.cr/\">UCR</a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        ";
        // line 116
        $this->displayBlock('modals', $context, $blocks);
        // line 117
        echo "    </body>
</html>
";
        // line 119
        $this->displayBlock('scripts', $context, $blocks);
    }

    // line 53
    public function block_menu($context, array $blocks = array())
    {
        echo " ";
    }

    // line 68
    public function block_title($context, array $blocks = array())
    {
    }

    // line 95
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 116
    public function block_modals($context, array $blocks = array())
    {
        echo " ";
    }

    // line 119
    public function block_scripts($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "CELiceoParaisoBundle::administration_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 119,  216 => 116,  210 => 95,  205 => 68,  199 => 53,  195 => 119,  191 => 117,  189 => 116,  167 => 96,  165 => 95,  153 => 86,  149 => 85,  129 => 68,  113 => 54,  111 => 53,  103 => 48,  90 => 38,  86 => 37,  81 => 35,  76 => 33,  71 => 31,  66 => 29,  59 => 25,  51 => 20,  46 => 18,  41 => 16,  30 => 7,  24 => 1,);
    }
}
