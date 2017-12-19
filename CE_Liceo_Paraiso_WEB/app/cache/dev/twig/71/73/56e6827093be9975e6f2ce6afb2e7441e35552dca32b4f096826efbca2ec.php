<?php

/* CELiceoParaisoBundle:Administrator:detail_department.html.twig */
class __TwigTemplate_717356e6827093be9975e6f2ce6afb2e7441e35552dca32b4f096826efbca2ec extends Twig_Template
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
            'scripts' => array($this, 'block_scripts'),
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
    ";
        // line 10
        if (($this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getCodigo", array(), "method") == 1)) {
            // line 11
            echo "        <li class=\"active\">
            <a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_area_nocturn");
            echo "\">
                <i class=\"ti-view-list-alt\"></i>
                <p>Área Nocturna</p>
            </a>
        </li>
        <li>
            <a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_plan_national");
            echo "\">
                <i class=\"ti-view-list-alt\"></i>
                <p>Plan Nacional</p>
            </a>
        </li>
    ";
        } else {
            // line 24
            echo "        <li>
            <a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_area_nocturn");
            echo "\">
                <i class=\"ti-view-list-alt\"></i>
                <p>Área Nocturna</p>
            </a>
        </li>
        <li class=\"active\">
            <a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_plan_national");
            echo "\">
                <i class=\"ti-view-list-alt\"></i>
                <p>Plan Nacional</p>
            </a>
        </li>
    ";
        }
        // line 37
        echo "    <li>
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

    // line 68
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " ";
    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
        echo "  
    <div class=\"nav-tabs-navigation\">
        <div class=\"nav-tabs-wrapper\">
            <ul id=\"tabs\" class=\"nav nav-tabs\" data-tabs=\"tabs\">
                ";
        // line 74
        if (($this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getNombre", array(), "method") == "Área Nocturna")) {
            // line 75
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_area_nocturn");
            echo "\">Información General</a></li>
                    ";
        } else {
            // line 77
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_plan_national");
            echo "\">Información General</a></li>
                    ";
        }
        // line 79
        echo "                <li class=\"active\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_departaments", array("area" => $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getCodigo", array(), "method"))), "html", null, true);
        echo "\" data-toggle=\"tab\">Departamentos</a></li>
                <li><a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_show_personal", array("area" => $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getCodigo", array(), "method"))), "html", null, true);
        echo "\">Personal</a></li>
                <li><a href=\"#\" data-toggle=\"tab\">Servicios</a></li>
                <li><a href=\"#\" data-toggle=\"tab\">Galería</a></li>
            </ul>
        </div>
    </div>
    ";
        // line 86
        if (array_key_exists("alert", $context)) {
            // line 87
            echo "        ";
            if (((isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")) == "success")) {
                // line 88
                echo "            <div class=\"alert alert-success text-center\" id=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>
                    <img src=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/img.png"), "html", null, true);
                echo "\"/> 
                    Informaci&oacute;n actualizada
                </strong>
            </div>
        ";
            }
            // line 96
            echo "        ";
            if (((isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")) != "success")) {
                // line 97
                echo "            <div class=\"alert alert-warning text-center\" id=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>
                    <img src=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/cancel.png"), "html", null, true);
                echo "\"/> 
                    ";
                // line 101
                echo twig_escape_filter($this->env, (isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")), "html", null, true);
                echo "
                </strong>
            </div>
        ";
            }
            // line 105
            echo "    ";
        }
        // line 106
        echo "    <div id=\"my-tab-content\" class=\"tab-content text-center\">
        <div class=\"tab-pane active\">
            <br>
            <div class=\"row\" id=\"divShowDetailDepartm\">
                <div class=\"col-sm-12 text-right\">
                    <a class=\"btn btn-round btn-fill btn-primary\" href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_departaments", array("area" => $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getCodigo", array(), "method"))), "html", null, true);
        echo "\">Ver Departamentos</a>
                </div>
                <form action=\"#\" method=\"post\" class=\"form-horizontal\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h4 class=\"title text-center\">Departamento ";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "getNombre", array(), "method"), "html", null, true);
        echo "</h4>
                            <hr>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"codDept\" class=\"control-label col-sm-4\">C&oacute;digo:</label>
                            <div class=\"col-sm-4\">
                                <input type=\"text\" class=\"form-control \" id=\"codDept\" 
                                       name=\"codDept\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "getCodigo", array(), "method"), "html", null, true);
        echo "\" readonly />
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"nameDept\" class=\"control-label col-sm-4\">Nombre:</label>
                            <div class=\"col-sm-4\">
                                <input type=\"text\" class=\"form-control \" id=\"nameDept\" 
                                       name=\"nameDept\" value=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "getNombre", array(), "method"), "html", null, true);
        echo "\" readonly />
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"descDept\" class=\"control-label col-sm-4\">Descripción:</label>
                            <div class=\"col-sm-4\">
                                <textarea type=\"text\" class=\"form-control \" id=\"descDept\" 
                                          name=\"descDept\"rows=\"4\">";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "getDescripcion", array(), "method"), "html", null, true);
        echo "</textarea>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"codAdmDept\" class=\"control-label col-sm-4\">Administrador:</label>
                            <div class=\"col-sm-1\">
                                <input type=\"text\" class=\"form-control \" id=\"codAdmDept\" 
                                       name=\"codAdmDept\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "getAdministrador", array(), "method"), "getCodigo", array(), "method"), "html", null, true);
        echo "\" required readonly/>
                            </div>
                            <div class=\"col-sm-3\">
                                <input type=\"text\" class=\"form-control \" id=\"admDept\" 
                                       name=\"admDept\" value=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "getAdministrador", array(), "method"), "getCodigoPersonal", array()), "getNombre", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "getAdministrador", array(), "method"), "getCodigoPersonal", array(), "method"), "getApellidos", array(), "method"), "html", null, true);
        echo "\" required readonly/>
                            </div>
                            <div class=\"col-sm-2\"><a class=\"btn btn-round btn-fill btn-primary\" onclick=\"\">Cambiar Administrador</a></div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"personalDept\" class=\"control-label col-sm-4\">Personal:</label>
                            <div class=\"col-sm-4\">
                                ";
        // line 155
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "getCodigoPersonal", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["personal"]) {
            // line 156
            echo "                                    <p>
                                        ";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["personal"], "getNombre", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["personal"], "getApellidos", array()), "html", null, true);
            echo "
                                    </p>
                                    <legend></legend>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                            </div>
                            <div class=\"col-sm-2\"><a class=\"btn btn-round btn-fill btn-primary\" onclick=\"showPersonalDept();\">Administrar</a></div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"filesDept\" class=\"control-label col-sm-4\">Archivos:</label>
                            <div class=\"col-sm-8\">
                                <a name=\"filesDept\" class=\"btn btn-round btn-fill btn-primary\" onclick=\"\">Ver Archivos</a>
                            </div>
                        </div>
                        <br>
                        <div class=\"form-group text-center\">
                            <a role=\"button\" class=\"btn btn-round btn-fill btn-success\" onclick=\"\">Actualizar</a>
                        </div>
                        <br>
                    </div>
                </form>
            </div>
            <div class=\"row\" id=\"divTeachersDept\">
                <div>
                    <div class=\"col-sm-12 text-right\">
                        <a class=\"btn btn-round btn-fill btn-primary\" href=\"#\">Agregar Personal</a>
                    </div>
                    <br>
                    <div class=\"card\">
                        <div class=\"header\">
                            <h4 class=\"title\">Lista del Personal</h4>
                            <p class=\"category\">Departamento ";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "getNombre", array(), "method"), "html", null, true);
        echo "</p>
                            <hr>
                        </div>
                        <div class=\"content table-responsive table-full-width\">
                            <table class=\"table table-striped table-hover\">
                                <thead>
                                <th style=\"width: 10px\"></th>
                                <th style=\"width: 800px\">Nombre</th>
                                <th style=\"width: 800px\">Apellidos</th>
                                <th style=\"width: 800px\">Correo</th>
                                <th style=\"width: 1500px\"></th>
                                </thead>
                                <tbody>
                                    ";
        // line 200
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "getCodigoPersonal", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["personal"]) {
            // line 201
            echo "                                        <tr>
                                            <th style=\"width: 10px\"></th>
                                            <th style=\"width: 800px\">";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($context["personal"], "getNombre", array(), "method"), "html", null, true);
            echo "</th>
                                            <th style=\"width: 800px\">";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute($context["personal"], "getApellidos", array(), "method"), "html", null, true);
            echo "</th>
                                            <th style=\"width: 800px\">";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute($context["personal"], "getCorreo", array(), "method"), "html", null, true);
            echo "</th>
                                            <th style=\"width: 1500px\">
                                                <a href=\"#\"><span class=\"glyphicon glyphicon-trash\"></span></a>
                                            </th>
                                        </tr>
                                    <legend></legend>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                                </tbody>
                            </table>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 221
    public function block_modals($context, array $blocks = array())
    {
    }

    // line 223
    public function block_scripts($context, array $blocks = array())
    {
        echo " 
    <script type=\"text/javascript\">
        //DETALLE DEPARTAMENTO
        document.getElementById('divShowDetailDepartm').style.display = 'block';
        document.getElementById('divTeachersDept').style.display = 'none';

        function showDetailDepartment() {
            //DETALLE DEPARTAMENTO
            document.getElementById('divShowDetailDepartm').style.display = 'block';
            document.getElementById('divTeachersDept').style.display = 'none';
        }

        function showPersonalDept() {
            //DETALLE DEPARTAMENTO
            document.getElementById('divShowDetailDepartm').style.display = 'none';
            document.getElementById('divTeachersDept').style.display = 'block';
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "CELiceoParaisoBundle:Administrator:detail_department.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 223,  394 => 221,  382 => 212,  369 => 205,  365 => 204,  361 => 203,  357 => 201,  353 => 200,  337 => 187,  309 => 161,  297 => 157,  294 => 156,  290 => 155,  278 => 148,  271 => 144,  261 => 137,  251 => 130,  241 => 123,  231 => 116,  223 => 111,  216 => 106,  213 => 105,  206 => 101,  202 => 100,  197 => 97,  194 => 96,  186 => 91,  181 => 88,  178 => 87,  176 => 86,  167 => 80,  162 => 79,  156 => 77,  150 => 75,  148 => 74,  140 => 70,  132 => 68,  98 => 37,  89 => 31,  80 => 25,  77 => 24,  68 => 18,  59 => 12,  56 => 11,  54 => 10,  46 => 5,  43 => 4,  40 => 3,  11 => 1,);
    }
}
