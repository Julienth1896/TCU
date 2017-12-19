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
            'scripts' => array($this, 'block_scripts'),
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
        echo "    <a href=\"#\" class=\"list-group-item\">Reseña</a>
    <a href=\"#\" class=\"list-group-item\">Departamentos</a>
    <a href=\"#\" class=\"list-group-item\">Servicios</a>
    <a href=\"#\" class=\"list-group-item\">Personal</a>
    <a href=\"#\" class=\"list-group-item\">Noticias</a>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    <h1 id=\"title\">Área ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getNombre", array(), "method"), "html", null, true);
        echo "</h1><hr>
    <div id=\"content\">
        <blockquote><p class=\"text-justify\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getDescripcion", array(), "method"), "html", null, true);
        echo "</p></blockquote>
    </div>
";
    }

    // line 17
    public function block_scripts($context, array $blocks = array())
    {
        echo " 
    <script type=\"text/javascript\">
        
    </script>
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
        return array (  66 => 17,  59 => 13,  53 => 11,  50 => 10,  41 => 3,  38 => 2,  11 => 1,);
    }
}
