<?php

/* CELiceoParaisoBundle:Default:area_view.html.twig */
class __TwigTemplate_e696e78c65d7a7f0973aa544de4a00f11c031f0c1ddc99ab20a373e90bcb4d0c extends Twig_Template
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
        echo "    <p><a href=\"#\">Reseña</a></p>
    <p><a href=\"#\">Departamentos</a></p>
    <p><a href=\"#\">Servicios</a></p>
    <p><a href=\"#\">Personal</a></p>
    <p><a href=\"#\">Noticias</a></p>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    <h1 id=\"title\">Área ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getNombre", array(), "method"), "html", null, true);
        echo "</h1><hr>
    ";
        // line 12
        if (((isset($context["subinformation"]) ? $context["subinformation"] : $this->getContext($context, "subinformation")) == "description")) {
            // line 13
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getDescripcion", array(), "method"), "html", null, true);
            echo "</p>
    ";
        }
        // line 15
        echo "    ";
        if (((isset($context["subinformation"]) ? $context["subinformation"] : $this->getContext($context, "subinformation")) == "departaments")) {
            // line 16
            echo "        
    ";
        }
        // line 18
        echo "    ";
        if (((isset($context["subinformation"]) ? $context["subinformation"] : $this->getContext($context, "subinformation")) == "services")) {
            // line 19
            echo "        
    ";
        }
        // line 21
        echo "    ";
        if (((isset($context["subinformation"]) ? $context["subinformation"] : $this->getContext($context, "subinformation")) == "personal")) {
            // line 22
            echo "        
    ";
        }
        // line 24
        echo "    ";
        if (((isset($context["subinformation"]) ? $context["subinformation"] : $this->getContext($context, "subinformation")) == "news")) {
            // line 25
            echo "        
    ";
        }
    }

    // line 29
    public function block_images($context, array $blocks = array())
    {
        // line 30
        echo "    <h1>IMÁGENES</h1>
";
    }

    public function getTemplateName()
    {
        return "CELiceoParaisoBundle:Default:area_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 30,  96 => 29,  90 => 25,  87 => 24,  83 => 22,  80 => 21,  76 => 19,  73 => 18,  69 => 16,  66 => 15,  60 => 13,  58 => 12,  53 => 11,  50 => 10,  41 => 3,  38 => 2,  11 => 1,);
    }
}
