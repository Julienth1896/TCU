<?php

/* CELiceoParaisoBundle:Administrator:error.html.twig */
class __TwigTemplate_064022bfd6135369055b4128fa659cdc2870193c13e7bbd58b6606eabb523c59 extends Twig_Template
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
    public function block_title($context, array $blocks = array())
    {
        echo " <h2>¡ERROR!</h2> ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
    <div id=\"content\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <blockquote>
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/error.png"), "html", null, true);
        echo "\">
                    <h2><b>No se encuentra la página que buscas.</b></h2>
                </blockquote>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CELiceoParaisoBundle:Administrator:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  43 => 5,  37 => 3,  11 => 1,);
    }
}
