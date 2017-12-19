<?php

/* CELiceoParaisoBundle:Adm_Dep:administration_departament.html.twig */
class __TwigTemplate_ea79260ee6b38549e9ae51de1a15bf00c0735b30b788aab52ddebd354d5cce82 extends Twig_Template
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
        echo "    <li class=\"active\">
        <a href=\"#\">
            <i class=\"ti-panel\"></i>
            <p>Coordinación</p>
        </a>
    </li>
    <li>
        <a href=\"user.html\">
            <i class=\"ti-user\"></i>
            <p>Personal</p>
        </a>
    </li>
    <li>
        <a href=\"table.html\">
            <i class=\"ti-view-list-alt\"></i>
            <p>Documentos</p>
        </a>
    </li>
    <li>
        <a href=\"table.html\">
            <i class=\"ti-view-list-alt\"></i>
            <p>Perfil</p>
        </a>
    </li>
";
    }

    public function getTemplateName()
    {
        return "CELiceoParaisoBundle:Adm_Dep:administration_departament.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
