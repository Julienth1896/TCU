<?php

/* CELiceoParaisoBundle:Administrator:institution.html.twig */
class __TwigTemplate_cd1450f73bcd5428737ca921b6a148d00750856366eba276ff2b7435e0fb9252 extends Twig_Template
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
            'modals' => array($this, 'block_modals'),
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
    <div class=\"row\">
        <div class=\"nav-tabs-navigation\">
            <div class=\"nav-tabs-wrapper\">
                <ul id=\"tabs\" class=\"nav nav-tabs\" data-tabs=\"tabs\">
                    <li class=\"active\"><a href=\"#history\" data-toggle=\"tab\">Historia</a></li>
                    <li><a href=\"#vision\" data-toggle=\"tab\">Visión</a></li>
                    <li><a href=\"#mision\" data-toggle=\"tab\">Mision</a></li>
                    <li><a href=\"#manager\" data-toggle=\"tab\">Encargados</a></li>
                    <li><a href=\"#ubication\" data-toggle=\"tab\" onclick=\"codeAddress();\">Ubicación</a></li>
                    <li><a href=\"#gallery\" data-toggle=\"tab\">Galería</a></li>
                </ul>
            </div>
        </div>
        <div id=\"my-tab-content\" class=\"tab-content text-right\">
            ";
        // line 70
        if (array_key_exists("alert", $context)) {
            // line 71
            echo "                ";
            if (((isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")) == "success")) {
                // line 72
                echo "                    <div class=\"alert alert-success text-center\" id=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                        <strong>
                            <img src=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/img.png"), "html", null, true);
                echo "\"/> 
                            Informaci&oacute;n actualizada
                        </strong>
                    </div>
                ";
            }
            // line 80
            echo "                ";
            if (((isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")) == "error")) {
                // line 81
                echo "                    <div class=\"alert alert-warning text-center\" id=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                        <strong>
                            <img src=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/cancel.png"), "html", null, true);
                echo "\"/> 
                            Ha ocurrido un error intentelo m&aacute;s tarde!
                        </strong>
                    </div>
                ";
            }
            // line 89
            echo "            ";
        }
        // line 90
        echo "            <div class=\"tab-pane active\" id=\"history\">
                <legend></legend>
                <blockquote>
                    <p class=\"text-justify text-info\" style=\"font-style: normal;\">
                        ";
        // line 94
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getHistoria", array(), "method"), "html", null, true));
        echo "
                    </p>
                </blockquote>
                <br>
                <a class=\"btn btn-round btn-fill btn-success\" data-target=\"#modal\" data-toggle=\"modal\">Actualizar</a>
            </div>

            <div class=\"tab-pane\" id=\"vision\">
                <legend></legend>
                <blockquote>
                    <p class=\"text-justify text-info\" style=\"font-style: normal;\">
                        ";
        // line 105
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getVision", array(), "method"), "html", null, true));
        echo "
                    </p>
                </blockquote>
                <br>
                <a class=\"btn btn-round btn-fill btn-success\" data-target=\"#modal2\" data-toggle=\"modal\">Actualizar</a>
            </div>
            <div class=\"tab-pane\" id=\"mision\">
                <legend></legend>
                <blockquote>
                    <p class=\"text-justify text-info\" style=\"font-style: normal;\">
                        ";
        // line 115
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getMision", array(), "method"), "html", null, true));
        echo "
                    </p>
                </blockquote>
                <br>
                <a class=\"btn btn-round btn-fill btn-success\" data-target=\"#modal3\" data-toggle=\"modal\">Actualizar</a>
            </div>
            <div class=\"tab-pane\" id=\"manager\">
                <legend></legend>
                <h4 style=\"text-align: left;\">Encargados:</h4>
                <blockquote>
                    <p class=\"text-justify text-info\" style=\"font-style: normal;\">
                        ";
        // line 126
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getEncargados", array(), "method"), "html", null, true));
        echo "
                    </p>
                </blockquote>
                <hr>
                <h4 style=\"text-align: left;\">Teléfono(s):</h4>
                <blockquote>
                    <p class=\"text-justify text-info\" style=\"font-style: normal;\">
                        ";
        // line 133
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getTelefono", array(), "method"), "html", null, true));
        echo "
                    </p>
                </blockquote>
                <br>
                <a class=\"btn btn-round btn-fill btn-success\" data-target=\"#modal4\" data-toggle=\"modal\">Actualizar</a>
            </div>
            <div class=\"tab-pane\" id=\"ubication\">
                <legend></legend>
                <p class=\"text-justify\" id=\"address\">";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getUbicacion", array(), "method"), "html", null, true);
        echo "</p>
                <blockquote>
                    <div id=\"map_canvas\" style=\"width: 90%; height: 300px; margin-left: 50px;\"></div>
                    <hr>
                </blockquote>
                <br>
            </div>
            <div class=\"tab-pane\" id=\"gallery\">
                <legend></legend>
                <blockquote>
                    <p class=\"text-justify\">Cargar imágenes</p>
                    <hr>
                </blockquote>
                <br>
                <a class=\"btn btn-round btn-fill btn-success\" data-target=\"\" data-toggle=\"modal\">Agregar</a>
            </div>
        </div>
    </div>
";
    }

    // line 161
    public function block_modals($context, array $blocks = array())
    {
        // line 162
        echo "    <div class=\"modal fade\" id=\"modal\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header alert alert-info\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">
                        <strong>Historia</strong>
                    </h4>
                </div>
                <form action=\"";
        // line 172
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_institution_history");
        echo "\" method=\"post\" class=\"form-horizontal\">
                    <div class=\"modal-body\">
                        <textarea class=\"form-control\" id=\"history\" name=\"history\" rows=\"8\" required>";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getHistoria", array(), "method"), "html", null, true);
        echo "</textarea>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">Actualizar</button>
                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"modal2\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header alert alert-info\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">
                        <strong>Visión</strong>
                    </h4>
                </div>
                <form action=\"";
        // line 194
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_institution_vision");
        echo "\" method=\"post\" class=\"form-horizontal\">
                    <div class=\"modal-body\">
                        <textarea class=\"form-control\" id=\"vision\" name=\"vision\" rows=\"8\" required>";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getVision", array(), "method"), "html", null, true);
        echo "</textarea>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">Actualizar</button>
                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"modal3\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header alert alert-info\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">
                        <strong>Misión</strong>
                    </h4>
                </div>
                <form action=\"";
        // line 216
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_institution_mision");
        echo "\" method=\"post\" class=\"form-horizontal\">
                    <div class=\"modal-body\">
                        <textarea class=\"form-control\" id=\"mision\" name=\"mision\" rows=\"8\" required>";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getMision", array(), "method"), "html", null, true);
        echo "</textarea>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">Actualizar</button>
                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"modal4\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header alert alert-info\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">
                        <strong>Información General</strong>
                    </h4>
                </div>
                <form action=\"";
        // line 238
        echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_institution_management");
        echo "\" method=\"post\" class=\"form-horizontal\">
                    <div class=\"modal-body\">
                        <label class=\"control-label col-md-3\" for=\"managers\">Encargados:</label>
                        <textarea class=\"form-control\" id=\"managers\" name=\"managers\" rows=\"8\" required>";
        // line 241
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getEncargados", array(), "method"), "html", null, true);
        echo "</textarea>
                        <label class=\"control-label col-md-3\" for=\"telephone\">Teléfono(s):</label>
                        <textarea class=\"form-control\" id=\"telephone\" name=\"telephone\" rows=\"2\" required>";
        // line 243
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getTelefono", array(), "method"), "html", null, true);
        echo "</textarea>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">Actualizar</button>
                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CELiceoParaisoBundle:Administrator:institution.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 243,  363 => 241,  357 => 238,  334 => 218,  329 => 216,  306 => 196,  301 => 194,  278 => 174,  273 => 172,  261 => 162,  258 => 161,  235 => 141,  224 => 133,  214 => 126,  200 => 115,  187 => 105,  173 => 94,  167 => 90,  164 => 89,  156 => 84,  151 => 81,  148 => 80,  140 => 75,  135 => 72,  132 => 71,  130 => 70,  111 => 55,  103 => 53,  63 => 17,  54 => 11,  45 => 5,  42 => 4,  39 => 3,  11 => 1,);
    }
}
