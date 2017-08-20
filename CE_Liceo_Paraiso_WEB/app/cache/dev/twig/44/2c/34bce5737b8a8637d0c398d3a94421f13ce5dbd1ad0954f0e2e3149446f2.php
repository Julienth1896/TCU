<?php

/* CELiceoParaisoBundle:Default:index.html.twig */
class __TwigTemplate_442c34bce5737b8a8637d0c398d3a94421f13ce5dbd1ad0954f0e2e3149446f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("CELiceoParaisoBundle::visitor_view.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'submenu' => array($this, 'block_submenu'),
            'content' => array($this, 'block_content'),
            'images' => array($this, 'block_images'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CELiceoParaisoBundle::visitor_view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_submenu($context, array $blocks = array())
    {
        // line 3
        echo "    <p><a href=\"";
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_homepage");
        echo "\">Historia</a></p>
    <p><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_description");
        echo "\">Descripción</a></p>
    <p><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_objectives");
        echo "\">Objetivos</a></p>
    <p><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_mision");
        echo "\">Misión</a></p>
    <p><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_vision");
        echo "\">Visión</a></p>
    <p><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_managers");
        echo "\">Encargados</a></p>
    <p><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_gallery");
        echo "\">Galería</a></p>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <h1 id=\"title\">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h1>
    ";
        // line 14
        if (((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")) == "map")) {
            // line 15
            echo "        <p class=\"text-justify\" id=\"address\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getUbicacion", array(), "method"), "html", null, true);
            echo "</p>
        <div id=\"map_canvas\" style=\"width: 650px; height: 300px; margin-left: 50px;\"></div>
        <hr>
        <h2>Área Administrativa</h2>
        <p class=\"text-justify\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getEncargados", array(), "method"), "html", null, true);
            echo "</p>
    ";
        }
        // line 21
        echo "    ";
        if (((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")) == "general")) {
            // line 22
            echo "        <div class=\"text-justify\">";
            echo twig_escape_filter($this->env, (isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "html", null, true);
            echo "</div>
    ";
        }
    }

    // line 26
    public function block_images($context, array $blocks = array())
    {
        // line 27
        echo "    <h1>IMÁGENES</h1>
";
    }

    public function getTemplateName()
    {
        return "CELiceoParaisoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  106 => 26,  98 => 22,  95 => 21,  90 => 19,  82 => 15,  80 => 14,  75 => 13,  72 => 12,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  46 => 4,  41 => 3,  38 => 2,  11 => 1,);
    }
}
