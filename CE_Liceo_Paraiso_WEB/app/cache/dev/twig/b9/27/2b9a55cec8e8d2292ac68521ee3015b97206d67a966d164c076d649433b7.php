<?php

/* CELiceoParaisoBundle:Administrator:personal_area.html.twig */
class __TwigTemplate_b9272b9a55cec8e8d2292ac68521ee3015b97206d67a966d164c076d649433b7 extends Twig_Template
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
        echo "                <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_departaments", array("area" => $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getCodigo", array(), "method"))), "html", null, true);
        echo "\">Departamentos</a></li>
                <li class=\"active\"><a href=\"#\" data-toggle=\"tab\">Personal</a></li>
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
            <legend></legend>
            ";
        // line 109
        if (array_key_exists("administrator", $context)) {
            echo " 
                <div class=\"col-sm-12\" id=\"divButton\" style=\"text-align: right;\">
                    <a class=\"btn btn-round btn-fill btn-primary\" data-target=\"#modal2\" data-toggle=\"modal\">Agregar Personal</a>
                </div>
                <br>
            ";
        }
        // line 115
        echo "            <hr>
            <div id=\"divTable\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card\">
                            <div class=\"header\">
                                <h4 class=\"title\"> ";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getNombre", array(), "method"), "html", null, true);
        echo " - Personal Activo</h4>
                                <p class=\"category\">Incluye los docentes, administradores y otros trabajadores de la institución</p>
                            </div>
                            <div class=\"content table-responsive table-full-width\">
                                <table class=\"table table-striped table-hover\">
                                    <thead>
                                    <th style=\"width: 30px\"></th>
                                    <th style=\"width: 800px\">Nombre</th>
                                    <th style=\"width: 800px\">Apellidos</th>
                                    <th style=\"width: 1500px\"></th>
                                    </thead>
                                    <tbody id=\"tbodyTeachers\">
                                        ";
        // line 133
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getPersonal", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 134
            echo "                                            <tr style=\"text-align: left;\">
                                                <td style=\"width: 5px\">
                                                    <span id=\"codTeacher\" name=\"codTeacher\">";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getCodigo", array(), "method"), "html", null, true);
            echo "</span>
                                                </td>
                                                <td style=\"width: 800px\">";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getNombre", array(), "method"), "html", null, true);
            echo "</td>
                                                <td style=\"width: 800px\">";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getApellidos", array(), "method"), "html", null, true);
            echo "</td>
                                                <td style=\"width: 1500px\">
                                                    <button type=\"button\" onclick=\"showDetailPersonal('";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getCodigo", array(), "method"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getNombre", array(), "method"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getApellidos", array(), "method"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "getCorreo", array(), "method"), "html", null, true);
            echo "');\" class=\"btn btn-primary\">Ver Detalle</button>
                                                    <a role=\"button\" href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_delete_personal_area", array("area" => $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getCodigo", array(), "method"), "codTeacher" => $this->getAttribute($context["teacher"], "getCodigo", array(), "method"))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Eliminar</a>
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                                    </tbody>
                                </table>
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div>
            <div class=\"row\" id=\"divDetailPersonal\">
                <div class=\"col-sm-6\">
                    <form action=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_update_personal", array("code" => $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getCodigo", array(), "method"))), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\">
                        <div class=\"card\">
                            <div class=\"header\">
                                <h4 class=\"title text-center\">Detalle del Personal</h4>
                                <hr>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"codeTeacher\" class=\"control-label col-sm-4\">C&oacute;digo:
                                </label>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" class=\"form-control \" id=\"codeTeacher\" 
                                           name=\"codeTeacher\" readonly />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"nameTeacher\" class=\"control-label col-sm-4\">Nombre:
                                </label>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" class=\"form-control \" id=\"nameTeacher\" 
                                           name=\"nameTeacher\" readonly />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"lastNameTeacher\" class=\"control-label col-sm-4\">Apellidos:
                                </label>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" class=\"form-control \" id=\"lastNameTeacher\" 
                                           name=\"lastNameTeacher\" readonly />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"emailTeacher\" class=\"control-label col-sm-4\">Correo:
                                </label>
                                <div class=\"col-sm-6\">
                                    <input type=\"email\" class=\"form-control \" id=\"emailTeacher\" 
                                           name=\"emailTeacher\" required/>
                                </div>
                            </div>
                            <br>
                            <div class=\"form-group text-center\">
                                <button type=\"submit\" class=\"btn btn-round btn-fill btn-success\">Guardar Personal</button>
                                <button type=\"button\" class=\"btn btn-round btn-fill btn-danger\" onclick=\"showPersonal();\">Lista de Personal</button>
                            </div>
                            <br>
                        </div>
                    </form>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"header\">
                        <h4 class=\"title\">Departamentos asociados al Personal</h4>
                        <p class=\"category\"></p>
                    </div>
                    <div class=\"content table-responsive table-full-width\">
                        <table class=\"table table-striped table-hover\">
                            <thead>
                            <th></th>
                            <th>Área</th>
                            <th>Departamento</th>
                            <th>Cómite</th>
                            </thead>
                            <tbody>
                                <tr style=\"text-align: center;\">
                                    <td id=\"areasPersonal\"></td>
                                    <td id=\"departmentsPersonal\"></td>
                                    <td id=\"comitesPersonal\"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 229
    public function block_modals($context, array $blocks = array())
    {
        // line 230
        echo "    <div class=\"modal fade\" id=\"modal2\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header alert alert-info\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">
                        <strong>Nuevo Personal</strong>
                    </h4>
                </div>
                <form action=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_new_personal", array("area" => $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getCodigo", array(), "method"))), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\">
                    <div class=\"modal-body\">
                        <label class=\"control-label col-sm-3\" for=\"name\">Nombre:</label>
                        <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" required/>
                        <label class=\"control-label col-sm-3\" for=\"lastname\">Apellidos:</label>
                        <input type=\"text\" class=\"form-control\" id=\"lastname\" name=\"lastname\" required/>
                        <label class=\"control-label col-sm-3\" for=\"email\">Correo:</label>
                        <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required/>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">Guardar</button>
                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    // line 259
    public function block_scripts($context, array $blocks = array())
    {
        // line 260
        echo "    <script text=\"text/javascript\">
        //DETALLE PERSONAL
        document.getElementById('divDetailPersonal').style.display = \"none\";
        document.getElementById('tbodyTeachers').innerHTML = \"\";
        
        function showDetailPersonal(code, name, lastname, email) {
            document.getElementById('areasPersonal').innerHTML = \"\";
            document.getElementById('departmentsPersonal').innerHTML = \"\";
            document.getElementById('comitesPersonal').innerHTML = \"\";
            document.getElementById('divTable').style.display = \"none\";
            
            document.getElementById('codeTeacher').value = code;
            document.getElementById('nameTeacher').value = name;
            document.getElementById('lastNameTeacher').value = lastname;
            document.getElementById('emailTeacher').value = email;
            var isAdmArea = false;        
            ";
        // line 276
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "getPersonal", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["personal"]) {
            // line 277
            echo "                if (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["personal"], "getCodigo", array(), "method"), "html", null, true);
            echo " == code) {
                    ";
            // line 278
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
            foreach ($context['_seq'] as $context["_key"] => $context["areaT"]) {
                // line 279
                echo "                        if (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["areaT"], "getAdministrador", array(), "method"), "getCodigoPersonal", array(), "method"), "getCodigo", array(), "method"), "html", null, true);
                echo " == code){
                            document.getElementById('areasPersonal').innerHTML += ";
                // line 280
                echo twig_escape_filter($this->env, $this->getAttribute($context["areaT"], "getNombre", array(), "method"), "html", null, true);
                echo "+ \" (Administrador)<br>\";
                            isAdmArea = true;
                        }
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['areaT'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "                    if (!isAdmArea){
                        document.getElementById('areasPersonal').innerHTML += \"Sin administracion\";
                    }
                    isAdmArea = false;            
                    ";
            // line 288
            if ((twig_length_filter($this->env, $this->getAttribute($context["personal"], "getCodigoDepartamento", array(), "method")) > 0)) {
                // line 289
                echo "                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["personal"], "getCodigoDepartamento", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["dpt"]) {
                    echo " 
                            document.getElementById('departmentsPersonal').innerHTML += ";
                    // line 290
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dpt"], "getNombre", array(), "method"), "html", null, true);
                    echo "+ \" <br>\";                
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dpt'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 292
                echo "                    ";
            } else {
                // line 293
                echo "                            document.getElementById('departmentsPersonal').innerHTML += \"Sin administracion\";            
                    ";
            }
            // line 295
            echo "
                    ";
            // line 296
            if ((twig_length_filter($this->env, $this->getAttribute($context["personal"], "getComite", array(), "method")) > 0)) {
                // line 297
                echo "                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["personal"], "getComite", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
                    echo " 
                            document.getElementById('comitesPersonal').innerHTML += ";
                    // line 298
                    echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "getNombre", array(), "method"), "html", null, true);
                    echo "+ \" <br>\"; 
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 300
                echo "                    ";
            } else {
                // line 301
                echo "                        document.getElementById('comitesPersonal').innerHTML += \"Sin administracion\";            
                    ";
            }
            // line 303
            echo "                }
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 305
        echo "
            //DETALLE PERSONAL
            document.getElementById('divDetailPersonal').style.display = \"block\";
        }

        function showPersonal(){
            //DETALLE PERSONAL
            document.getElementById('divDetailPersonal').style.display = \"none\";
            document.getElementById('divTable').style.display = \"block\";
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "CELiceoParaisoBundle:Administrator:personal_area.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 305,  524 => 303,  520 => 301,  517 => 300,  509 => 298,  502 => 297,  500 => 296,  497 => 295,  493 => 293,  490 => 292,  482 => 290,  475 => 289,  473 => 288,  467 => 284,  457 => 280,  452 => 279,  448 => 278,  443 => 277,  439 => 276,  421 => 260,  418 => 259,  396 => 240,  384 => 230,  381 => 229,  303 => 155,  292 => 146,  282 => 142,  272 => 141,  267 => 139,  263 => 138,  258 => 136,  254 => 134,  250 => 133,  235 => 121,  227 => 115,  218 => 109,  213 => 106,  210 => 105,  203 => 101,  199 => 100,  194 => 97,  191 => 96,  183 => 91,  178 => 88,  175 => 87,  173 => 86,  162 => 79,  156 => 77,  150 => 75,  148 => 74,  140 => 70,  132 => 68,  98 => 37,  89 => 31,  80 => 25,  77 => 24,  68 => 18,  59 => 12,  56 => 11,  54 => 10,  46 => 5,  43 => 4,  40 => 3,  11 => 1,);
    }
}
