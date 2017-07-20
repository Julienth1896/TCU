<?php

/* CELiceoParaisoBundle::visitor_view.html.twig */
class __TwigTemplate_3705d7d15cd5cbfaf69f741e302b05e1b4a9ff0b7e43dd3da50bf3696f8c9b75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'submenu' => array($this, 'block_submenu'),
            'content' => array($this, 'block_content'),
            'images' => array($this, 'block_images'),
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
    </head>
    <body>

        <div class=\"jumbotron\">
            <div class=\"row\">
                <div class=\"col-sm-2 text-center\">
                    <img src=\"";
        // line 17
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
        // line 38
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_homepage");
        echo "\">
                                <span class=\"glyphicon glyphicon-home\"></span> Inicio
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <span class=\"glyphicon glyphicon-education\"></span> Área Vocacional
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <span class=\"glyphicon glyphicon-education\"></span> Área Diurna
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <span class=\"glyphicon glyphicon-education\"></span> Área Nocturna
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <span class=\"glyphicon glyphicon-picture\"></span> Galería
                            </a>
                        </li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class=\"container-fluid text-center\">    
            <div class=\"row content\">
                <div class=\"col-sm-2 sidenav\">
                    ";
        // line 73
        $this->displayBlock('submenu', $context, $blocks);
        // line 74
        echo "                </div>
                <div class=\"col-sm-8 text-left\"> 
                    ";
        // line 76
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "                </div>
                <div class=\"col-sm-2 sidenav\">
                    ";
        // line 79
        $this->displayBlock('images', $context, $blocks);
        // line 80
        echo "                </div>
            </div>
        </div>

        <footer class=\"container-fluid text-center\">
            <p>Centro Educativo Liceo de Paraíso</p>
            <p>Trabajo Comunal Universitario - UCR - 2017</p>
        </footer>

    </body>
</html>";
    }

    // line 73
    public function block_submenu($context, array $blocks = array())
    {
        echo " ";
    }

    // line 76
    public function block_content($context, array $blocks = array())
    {
    }

    // line 79
    public function block_images($context, array $blocks = array())
    {
        echo " ";
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
        return array (  144 => 79,  139 => 76,  133 => 73,  119 => 80,  117 => 79,  113 => 77,  111 => 76,  107 => 74,  105 => 73,  67 => 38,  43 => 17,  33 => 10,  22 => 1,);
    }
}
