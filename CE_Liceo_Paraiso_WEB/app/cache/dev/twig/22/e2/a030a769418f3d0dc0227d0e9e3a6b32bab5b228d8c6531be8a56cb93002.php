<?php

/* CELiceoParaisoBundle::visitor_view.html.twig */
class __TwigTemplate_22e2a030a769418f3d0dc0227d0e9e3a6b32bab5b228d8c6531be8a56cb93002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'submenu' => array($this, 'block_submenu'),
            'content' => array($this, 'block_content'),
            'images' => array($this, 'block_images'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>CE Liceo Paraíso</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/js/mapjs.js"), "html", null, true);
        echo "\"></script>
        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDjY6bb7os43WpETqE-dSKsGkLF1wTzqYk&callback\"></script>
    </head>
    <body onload=\"codeAddress();\" >
        <div class=\"jumbotron\">
            <div class=\"row\">
                <div class=\"col-sm-2 text-center\">
                    <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/CE_logo.png"), "html", null, true);
        echo "\" alt=\"\" width=\"200\" height=\"200\"/>
                </div>
                <div class=\"col-sm-8 text-center\">
                    <h1>Centro Educativo Liceo Paraíso</h1>      
                    <p>Pionero de la Educación Secundaria de Paraíso</p>
                </div>
            </div>
        </div>

        <nav class=\"navbar navbar-inverse\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>                        
                    </button>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"navbar\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\">
                            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_homepage");
        echo "\">
                                <span class=\"glyphicon glyphicon-home\"></span> Inicio
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_vocational");
        echo "\">
                                <span class=\"glyphicon glyphicon-education\"></span> Área Vocacional
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_diurnal");
        echo "\">
                                <span class=\"glyphicon glyphicon-education\"></span> Área Diurna
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_nocturnal");
        echo "\">
                                <span class=\"glyphicon glyphicon-education\"></span> Área Nocturna
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_ubication");
        echo "\">
                                <span class=\"glyphicon glyphicon-map-marker\"></span> Ubicación
                            </a>
                        </li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_login");
        echo "\">
                                <span class=\"glyphicon glyphicon-log-in\"></span> Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class=\"container-fluid text-center\">    
            <div class=\"row content\">
                <div class=\"col-sm-3 sidenav\">
                    ";
        // line 76
        $this->displayBlock('submenu', $context, $blocks);
        // line 77
        echo "                </div>
                <div class=\"col-sm-7 text-left\"> 
                    ";
        // line 79
        $this->displayBlock('content', $context, $blocks);
        // line 80
        echo "                </div>
                <div class=\"col-sm-3 sidenav\">
                    ";
        // line 82
        $this->displayBlock('images', $context, $blocks);
        // line 83
        echo "                </div>
            </div>
        </div>

        <footer class=\"container-fluid text-center\">
            <p>Centro Educativo Liceo de Paraíso</p>
            <p>Trabajo Comunal Universitario - UCR - 2017</p>
        </footer>

    </body>
    ";
        // line 93
        $this->displayBlock('scripts', $context, $blocks);
        // line 94
        echo "</html>";
    }

    // line 76
    public function block_submenu($context, array $blocks = array())
    {
        echo " ";
    }

    // line 79
    public function block_content($context, array $blocks = array())
    {
    }

    // line 82
    public function block_images($context, array $blocks = array())
    {
        echo " ";
    }

    // line 93
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CELiceoParaisoBundle::visitor_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 93,  170 => 82,  165 => 79,  159 => 76,  155 => 94,  153 => 93,  141 => 83,  139 => 82,  135 => 80,  133 => 79,  129 => 77,  127 => 76,  113 => 65,  104 => 59,  96 => 54,  88 => 49,  80 => 44,  72 => 39,  48 => 18,  38 => 11,  34 => 10,  23 => 1,);
    }
}
