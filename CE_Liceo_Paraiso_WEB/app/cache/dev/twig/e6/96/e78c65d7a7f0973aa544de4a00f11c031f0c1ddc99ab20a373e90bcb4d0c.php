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
    <p><a href=\"#\">Servicios</a></p>
    <p><a href=\"#\">Personal</a></p>
    <p><a href=\"#\">Noticias</a></p>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>Welcome</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <hr>
    <h3>Test</h3>
    <p>Lorem ipsum...</p>
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
        return array (  51 => 10,  48 => 9,  40 => 3,  37 => 2,  11 => 1,);
    }
}
