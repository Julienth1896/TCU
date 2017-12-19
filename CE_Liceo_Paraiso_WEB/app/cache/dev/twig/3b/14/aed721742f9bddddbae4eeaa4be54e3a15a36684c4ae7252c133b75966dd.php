<?php

/* CELiceoParaisoBundle:Administrator:administration_general.html.twig */
class __TwigTemplate_3b14aed721742f9bddddbae4eeaa4be54e3a15a36684c4ae7252c133b75966dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("CELiceoParaisoBundle::administration_view.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CELiceoParaisoBundle::administration_view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "    <li>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_institution_admin");
        echo "\">
            <i class=\"ti-panel\"></i>
            <p>Institución</p>
        </a>
    </li>
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_area_nocturn");
        echo "\">
            <i class=\"ti-view-list-alt\"></i>
            <p>Área Nocturna</p>
        </a>
    </li>
    <li>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_plan_national");
        echo "\">
            <i class=\"ti-view-list-alt\"></i>
            <p>Plan Nacional</p>
        </a>
    </li>
    <li>
        <a href=\"#\">
            <i class=\"ti-view-list-alt\"></i>
            <p>Personal</p>
        </a>
    </li>
    <li>
        <a href=\"#\">
            <i class=\"ti-view-list-alt\"></i>
            <p>Departamentos</p>
        </a>
    </li>
    <li>
        <a href=\"#\">
            <i class=\"ti-view-list-alt\"></i>
            <p>Comités</p>
        </a>
    </li>
    <li>
        <a href=\"#\">
            <i class=\"ti-view-list-alt\"></i>
            <p>Clubs</p>
        </a>
    </li>
    <li>
        <a href=\"#\">
            <i class=\"ti-view-list-alt\"></i>
            <p>Servicios</p>
        </a>
    </li>
";
    }

    // line 53
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " ";
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        echo " 
    <div id=\"content\" onload=\"init();\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <blockquote>
                    <p class=\"text-justify\" style=\"font-style: normal;\">
                        <b>Bienvenido a CELIPA Admin, un sitio donde se innova la educación podrás admnistrar la información, 
                            personal y documentos de tu institución.</b>
                    </p>
                </blockquote>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-2\"></div>
            <div class=\"col-sm-8\">
                <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                    <!-- Indicators -->
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class=\"carousel-inner\">
                        <div class=\"item active\">
                            <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/CELPA1.PNG"), "html", null, true);
        echo "\" alt=\"Liceo\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/CELPA2.PNG"), "html", null, true);
        echo "\" alt=\"Liceo\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/CELPA1.PNG"), "html", null, true);
        echo "\" alt=\"Liceo\">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
                        <span class=\"glyphicon glyphicon-chevron-left\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CELiceoParaisoBundle:Administrator:administration_general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 89,  147 => 85,  140 => 81,  110 => 55,  102 => 53,  62 => 17,  53 => 11,  44 => 5,  41 => 4,  38 => 3,  11 => 1,);
    }
}
