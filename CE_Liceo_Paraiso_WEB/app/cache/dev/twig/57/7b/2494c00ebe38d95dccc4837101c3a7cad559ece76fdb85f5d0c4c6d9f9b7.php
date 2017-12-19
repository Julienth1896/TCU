<?php

/* CELiceoParaisoBundle:Administrator:departments_area.html.twig */
class __TwigTemplate_577b2494c00ebe38d95dccc4837101c3a7cad559ece76fdb85f5d0c4c6d9f9b7 extends Twig_Template
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
        echo "                <li class=\"active\"><a href=\"#\" data-toggle=\"tab\">Departamentos</a></li>
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
            ";
        // line 109
        if (array_key_exists("administrator", $context)) {
            // line 110
            echo "                <div class=\"row\" id=\"divAddDept\">
                    <div class=\"col-sm-12 text-right\">
                        <a class=\"btn btn-round btn-fill btn-primary\" onclick=\"showFormAddDepartment();\">Agregar Departamento</a>
                    </div>
                </div>
                <br>
            ";
        }
        // line 117
        echo "            <div class=\"row\" id=\"divShowDeparts\">
                <div class=\"col-sm-12 text-right\">
                    <a class=\"btn btn-round btn-fill btn-primary\" onclick=\"showListDepartments();\">Ver Departamentos</a>
                </div>
            </div>
            <br>
            <div class=\"row\" id=\"divListDepartments\">
                <form action=\"#\" method=\"post\" class=\"form-horizontal\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h4 class=\"title text-center\">Lista de Departamentos</h4>
                            <hr>
                        </div>
                        <div class=\"content table-responsive table-full-width\">
                            <table class=\"table table-striped table-hover\">
                                <thead>
                                <th style=\"width: 10px\"></th>
                                <th style=\"width: 800px\">Nombre</th>
                                <th style=\"width: 1000px\">Descripción</th>
                                <th style=\"width: 800px\">Coordinador</th>
                                <th style=\"width: 1500px\"></th>
                                </thead>
                                <tbody>
                                    ";
        // line 140
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getDepartamento", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
            // line 141
            echo "                                        <tr style=\"text-align: left\">
                                            <td id=\"codDepart\" name=\"codDepart\" style=\"width: 10px\">";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "getCodigo", array(), "method"), "html", null, true);
            echo "</td>
                                            <td style=\"width: 800px\">";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "getNombre", array(), "method"), "html", null, true);
            echo "</td>
                                            <td style=\"width: 1000px\">";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "getDescripcion", array(), "method"), "html", null, true);
            echo "</td>
                                            <td style=\"width: 800px\">";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["department"], "getAdministrador", array(), "method"), "getCodigoPersonal", array(), "method"), "getNombre", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["department"], "getAdministrador", array(), "method"), "getCodigoPersonal", array(), "method"), "getApellidos", array(), "method"), "html", null, true);
            echo "</td>
                                            <td style=\"width: 1500px\">
                                                <a href=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_detail_department", array("area" => $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getCodigo", array(), "method"), "department" => $this->getAttribute($context["department"], "getCodigo", array(), "method"))), "html", null, true);
            echo "\" class=\"btn btn-primary\" role=\"button\">Ver detalle</a>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                                </tbody>
                            </table>
                        </div> 
                    </div>
                </form>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-3\"></div>
                <div class=\"col-sm-6\">
                    <form action=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_add_department", array("code" => $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getCodigo", array(), "method"))), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\">
                        <div class=\"card\" id=\"divFormAddDepartm\">
                            <div class=\"header\">
                                <h4 class=\"title text-center\">Nuevo Departamento</h4>
                                <hr>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"nameDepart\" class=\"control-label col-sm-4\">Nombre:
                                </label>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" class=\"form-control \" id=\"nameDepart\" 
                                           name=\"nameDepart\" required />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"descriptionDepart\" class=\"control-label col-sm-4\">Descripción:
                                </label>
                                <div class=\"col-sm-6\">
                                    <textarea class=\"form-control\" id=\"descriptionDepart\" name=\"descriptionDepart\" rows=\"8\"></textarea>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"codTeach\" class=\"control-label col-sm-4\">Coordinador:
                                </label>
                                <div class=\"col-sm-3\">
                                    <input type=\"text\" class=\"form-control \" id=\"codTeach\" name=\"codTeach\" required readonly />
                                </div>
                                <div class=\"col-sm-2\">
                                    <a class=\"btn btn-round btn-fill btn-primary\" onclick=\"showTableTeachers();\">Asignar</a>
                                </div>
                            </div>
                            <br>
                            <div class=\"form-group text-center\">
                                <button type=\"submit\" class=\"btn btn-round btn-fill btn-success\">Guardar Departamento</button>
                                <a class=\"btn btn-round btn-fill btn-danger\" onclick=\"showListDepartments();\">Cancelar</a>
                            </div>
                            <br>
                        </div>
                        <div class=\"card\" id=\"detailAdmDept\">
                            <div class=\"header\">
                                <h4 class=\"title text-center\">Detalle del Docente</h4>
                                <hr>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"codeTeach\" class=\"control-label col-sm-4\">C&oacute;digo:
                                </label>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" class=\"form-control \" id=\"codeTeach\" 
                                           name=\"codeTeach\" readonly />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"nameTeach\" class=\"control-label col-sm-4\">Nombre:
                                </label>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" class=\"form-control \" id=\"nameTeach\" 
                                           name=\"nameTeach\" readonly />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"lastNameTeach\" class=\"control-label col-sm-4\">Apellidos:
                                </label>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" class=\"form-control \" id=\"lastNameTeach\" 
                                           name=\"lastNameTeach\" readonly />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"emailTeach\" class=\"control-label col-sm-4\">Correo:
                                </label>
                                <div class=\"col-sm-6\">
                                    <input type=\"email\" class=\"form-control \" id=\"emailTeach\" 
                                           name=\"emailTeach\" required/>
                                </div>
                                <div class=\"col-sm-2\"><span id=\"err1\" class=\"err\">*</span></div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"telephoneTeach\" class=\"control-label col-sm-4\">Teléfono:
                                </label>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" class=\"form-control \" id=\"telephoneTeach\" 
                                           name=\"telephoneTeach\" required/>
                                </div>
                                <div class=\"col-sm-2\"><span id=\"err2\" class=\"err\">*</span></div>
                            </div>
                            <br>
                            <div class=\"form-group text-center\">
                                <a role=\"button\" class=\"btn btn-round btn-fill btn-success\" onclick=\"setAdminDepart();\">Guardar Administrador</a>
                                <a class=\"btn btn-round btn-fill btn-danger\" onclick=\"showTableTeachers();\">Lista de Docentes</a>
                            </div>
                            <br>
                        </div>
                    </form>
                </div>
                <div class=\"card\" id=\"divFormAddDepAdminist\">
                    <div class=\"header\">
                        <h4 class=\"title text-center\">Lista de Profesores</h4>
                        <hr>
                    </div>
                    <div class=\"content table-responsive table-full-width\">
                        <table class=\"table table-striped table-hover\">
                            <thead>
                            <th></th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th></th>
                            </thead>
                            <tbody>
                                ";
        // line 268
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 269
            echo "                                    <tr>
                                        <td>";
            // line 270
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getCodigo", array(), "method"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 271
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getNombre", array(), "method"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 272
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getApellidos", array(), "method"), "html", null, true);
            echo "</td>
                                        <td><a role=\"button\" onclick=\"showFormSetAdmin('";
            // line 273
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getCodigo", array(), "method"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getNombre", array(), "method"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getApellidos", array(), "method"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getCorreo", array(), "method"), "html", null, true);
            echo "');\" class=\"btn btn-success\">Asignar</a></td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        echo "                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 284
    public function block_modals($context, array $blocks = array())
    {
    }

    // line 286
    public function block_scripts($context, array $blocks = array())
    {
        echo " 
    <script type=\"text/javascript\">
                
        //AGREGAR DEPARTAMENTO
        document.getElementById('divShowDeparts').style.display = 'none';
        document.getElementById('divFormAddDepartm').style.display = 'none';
        document.getElementById('divFormAddDepAdminist').style.display = 'none';
        document.getElementById('detailAdmDept').style.display = 'none'

        function showListDepartments() {
            //BOTONES
            document.getElementById('divShowDeparts').style.display = 'none';
            document.getElementById('divAddDept').style.display = 'block';
            document.getElementById('divListDepartments').style.display = 'block';

            //AGREGAR DEPARTAMENTO
            document.getElementById('divFormAddDepartm').style.display = 'none';
            document.getElementById('divFormAddDepAdminist').style.display = 'none';
            document.getElementById('detailAdmDept').style.display = 'none';

            //ERROR
            document.getElementById('err2').style.display = 'none';
            document.getElementById('err1').style.display = 'none';
        }

        function showFormAddDepartment() {
            document.getElementById('divListDepartments').style.display = 'none';

            //BOTONES
            document.getElementById('divShowDeparts').style.display = 'block';
            document.getElementById('divAddDept').style.display = 'none';

            //AGREGAR DEPARTAMENTO
            document.getElementById('divFormAddDepAdminist').style.display = 'none';
            document.getElementById('detailAdmDept').style.display = 'none';
            document.getElementById('divFormAddDepartm').style.display = 'block';

            //ERROR
            document.getElementById('err2').style.display = 'none';
            document.getElementById('err1').style.display = 'none';

            //ACTUALIZA BOTÓN 
            document.getElementById('codTeach').value = \"\";
        }

        function showTableTeachers() {
            //BOTONES
            document.getElementById('divShowDeparts').style.display = 'block';
            document.getElementById('divAddDept').style.display = 'none';

            //AGREGAR DEPARTAMENTO
            document.getElementById('divFormAddDepartm').style.display = 'none';
            document.getElementById('divFormAddDepAdminist').style.display = 'block';
            document.getElementById('detailAdmDept').style.display = 'none';
            document.getElementById('divListDepartments').style.display = 'none';

            //ERROR
            document.getElementById('err2').style.display = 'none';
            document.getElementById('err1').style.display = 'none';
        }

        function showFormSetAdmin(codTeacher, name, lastName, email) {
            document.getElementById('codeTeach').value = codTeacher;
            document.getElementById('nameTeach').value = name;
            document.getElementById('lastNameTeach').value = lastName;
            document.getElementById('emailTeach').value = email;
            document.getElementById('detailAdmDept').style.display = 'block';

            //AGREGAR DEPARTAMENTO
            document.getElementById('divFormAddDepartm').style.display = \"none\";
            document.getElementById('divFormAddDepAdminist').style.display = \"none\";
            document.getElementById('divListDepartments').style.display = 'none';

            //ERROR
            document.getElementById('err2').style.display = 'none';
            document.getElementById('err1').style.display = 'none';

            //BOTONES
            document.getElementById('divShowDeparts').style.display = 'block';
            document.getElementById('divAddDept').style.display = 'none';
        }

        function setAdminDepart() {
            if (document.getElementById('emailTeach').value !== \"\") {
                if (document.getElementById('telephoneTeach').value !== \"\") {
                    showFormAddDepartment();
                    document.getElementById('codTeach').value = document.getElementById('codeTeach').value;
                } else
                    document.getElementById('err2').style.display = 'block';
            } else
                document.getElementById('err1').style.display = 'block';
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "CELiceoParaisoBundle:Administrator:departments_area.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 286,  458 => 284,  447 => 276,  432 => 273,  428 => 272,  424 => 271,  420 => 270,  417 => 269,  413 => 268,  302 => 160,  291 => 151,  281 => 147,  274 => 145,  270 => 144,  266 => 143,  262 => 142,  259 => 141,  255 => 140,  230 => 117,  221 => 110,  219 => 109,  214 => 106,  211 => 105,  204 => 101,  200 => 100,  195 => 97,  192 => 96,  184 => 91,  179 => 88,  176 => 87,  174 => 86,  165 => 80,  162 => 79,  156 => 77,  150 => 75,  148 => 74,  140 => 70,  132 => 68,  98 => 37,  89 => 31,  80 => 25,  77 => 24,  68 => 18,  59 => 12,  56 => 11,  54 => 10,  46 => 5,  43 => 4,  40 => 3,  11 => 1,);
    }
}
