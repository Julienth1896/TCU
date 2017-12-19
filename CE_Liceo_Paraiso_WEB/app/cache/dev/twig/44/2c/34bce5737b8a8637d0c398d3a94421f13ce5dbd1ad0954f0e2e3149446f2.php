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
        echo "    ";
        if (((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")) != "home")) {
            // line 4
            echo "        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">Menú</div>
            <div class=\"panel-body list-group\">
                <a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_about_us");
            echo "\" class=\"list-group-item\">¿Quienes Somos?</a>
                <a href=\"\" class=\"list-group-item\">Modalidad Nocturna</a>
                <a href=\"\" class=\"list-group-item\">Plan Nacional</a>
                <a href=\"\" class=\"list-group-item\">Departamentos</a>
                <a href=\"\" class=\"list-group-item\">Departamento Administrativo</a>
                <a href=\"\" class=\"list-group-item\">Comites</a>
                <a href=\"\" class=\"list-group-item\">Servicios</a>
                <a href=\"\" class=\"list-group-item\">Clubs</a>
                <a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_credits");
            echo "\" class=\"list-group-item\">Créditos</a>
            </div>
        </div>
    ";
        }
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        echo "    
    <hr>
    <div id=\"content\">
        <h1 id=\"title\"><strong class=\"titulo\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</strong></h1>
        <hr>
        ";
        // line 26
        if (((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")) == "map")) {
            // line 27
            echo "            <p class=\"text-justify\" id=\"address\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "getUbicacion", array(), "method"), "html", null, true);
            echo "</p>
            <div id=\"map_canvas\" style=\"width: 650px; height: 300px; margin-left: 50px;\"></div>
            <hr>
        ";
        }
        // line 31
        echo "        ";
        if (((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")) == "home")) {
            // line 32
            echo "            <div class=\"col-sm-4\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">¿QUIENES SOMOS?</div>
                    <div class=\"panel-body\">
                        <a role=\"button\" href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_about_us");
            echo "\">
                            <img src=\"https://placehold.it/150x80?text=IMAGE\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
                        </a>
                    </div>
                    <div class=\"panel-footer\">Metas del colegio</div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\">MODALIDAD NOCTURNA</div>
                    <div class=\"panel-body\">
                        <a href=\"#\">
                            <img src=\"https://placehold.it/150x80?text=IMAGE\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
                        </a>
                    </div>
                    <div class=\"panel-footer\">Descripción</div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"panel panel-danger\">
                    <div class=\"panel-heading\">PLAN NACIONAL</div>
                    <div class=\"panel-body\">
                        <a href=\"#\">
                            <img src=\"https://placehold.it/150x80?text=IMAGE\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
                        </a>
                    </div>
                    <div class=\"panel-footer\">Descripción</div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"panel panel-danger\">
                    <div class=\"panel-heading\">DEPARTAMENTOS Y DOCENTES</div>
                    <div class=\"panel-body\">
                        <a href=\"\">
                            <img src=\"https://placehold.it/150x80?text=IMAGE\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
                        </a>
                    </div>
                    <div class=\"panel-footer\">Descripción</div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">DEPARTAMENTO ADMINISTRATIVO</div>
                    <div class=\"panel-body\">
                        <a href=\"#\">
                            <img src=\"https://placehold.it/150x80?text=IMAGE\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
                        </a>
                    </div>
                    <div class=\"panel-footer\">Personal Administrativo del colegio</div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\">COMITES</div>
                    <div class=\"panel-body\">
                        <a href=\"";
            // line 91
            echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_ubication");
            echo "\">
                            <img src=\"https://placehold.it/150x80?text=IMAGE\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
                        </a>
                    </div>
                    <div class=\"panel-footer\">Descripción</div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\">SERVICIOS</div>
                    <div class=\"panel-body\">
                        <a href=\"\">
                            <img src=\"https://placehold.it/150x80?text=IMAGE\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
                        </a>
                    </div>
                    <div class=\"panel-footer\">Decripción</div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"panel panel-danger\">
                    <div class=\"panel-heading\">CLUBS</div>
                    <div class=\"panel-body\">
                        <a href=\"\">
                            <img src=\"https://placehold.it/150x80?text=IMAGE\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
                        </a>
                    </div>
                    <div class=\"panel-footer\">Descripción</div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">CRÉDITOS</div>
                    <div class=\"panel-body\">
                        <a href=\"";
            // line 124
            echo $this->env->getExtension('routing')->getPath("ce_liceo_paraiso_credits");
            echo "\">
                            <img src=\"https://placehold.it/150x80?text=IMAGE\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
                        </a>
                    </div>
                    <div class=\"panel-footer\">Descripción</div>
                </div>
            </div>
            <br>
        ";
        }
        // line 133
        echo "        ";
        if (((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")) == "about")) {
            // line 134
            echo "            <div class=\"col-sm-12 text-left\">
                <div class=\"row\">
                    <h4 class=\"subtitle\">Historia</h4>
                    <blockquote><p class=\"text-justify\">";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "history", array()), "html", null, true);
            echo "</p></blockquote>
                </div>
                <div class=\"row\">
                    <h4 class=\"subtitle\">Visión</h4>
                    <blockquote><p class=\"text-justify\">";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "vision", array()), "html", null, true);
            echo "</p></blockquote>
                </div>
                <div class=\"row\">
                    <h4 class=\"subtitle\">Misión</h4>
                    <blockquote><p class=\"text-justify\">";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["institution"]) ? $context["institution"] : $this->getContext($context, "institution")), "mision", array()), "html", null, true);
            echo "</p></blockquote>
                </div>
            </div>
        ";
        }
        // line 149
        echo "        ";
        if (((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")) == "credits")) {
            // line 150
            echo "            <blockquote>
                <p class=\"text-justify\">
                    Este sitio fue creado por estudiantes de Informática Empresarial del Recinto de Paraíso de la Universidad 
                    de Costa Rica como parte del desarrollo del Trabajo Comunal Universitario XXX Nombre del TCU.
                </p>
            </blockquote>

            <div class=\"col-md-4\">
                <div class=\"member_detail\">
                    <div class=\"member_img\">
                        <img src=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/member.png"), "html", null, true);
            echo "\" width=\"100%\">
                    </div>
                    <div class=\"member_name\">
                        <h5>Julienth Olivas Padilla</h5>
                        <p>Estudiante Informática Empresarial</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"member_detail\">
                    <div class=\"member_img\">
                        <img src=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/ucr.png"), "html", null, true);
            echo "\" width=\"100%\">
                    </div>
                    <div class=\"member_name\">
                        <h5>Universidad de Costa Rica</h5>
                        <p>Sede Atlántico, Recinto Paraíso.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"member_detail\">
                    <div class=\"member_img\">
                        <img src=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ce_liceo_paraiso_app/img/member.png"), "html", null, true);
            echo "\" width=\"100%\">
                    </div>
                    <div class=\"member_name\">
                        <h5>Jacqueline Navarro Artavia</h5>
                        <p>Estudiante Informática Empresarial</p>
                    </div>
                </div>
            </div>
        ";
        }
        // line 191
        echo "        ";
        if (((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")) == "departments")) {
            // line 192
            echo "            
        ";
        }
        // line 194
        echo "        ";
        if (((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")) == "administrative")) {
            // line 195
            echo "
        ";
        }
        // line 197
        echo "        ";
        if (((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")) == "clubs")) {
            // line 198
            echo "
        ";
        }
        // line 200
        echo "        ";
        if (((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")) == "services")) {
            // line 201
            echo "
        ";
        }
        // line 203
        echo "        ";
        if (((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")) == "committees")) {
            // line 204
            echo "
        ";
        }
        // line 206
        echo "    </div>
";
    }

    // line 209
    public function block_scripts($context, array $blocks = array())
    {
        // line 210
        echo "    <script type=\"text/javascript\">
        
    </script>
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
        return array (  333 => 210,  330 => 209,  325 => 206,  321 => 204,  318 => 203,  314 => 201,  311 => 200,  307 => 198,  304 => 197,  300 => 195,  297 => 194,  293 => 192,  290 => 191,  278 => 182,  264 => 171,  250 => 160,  238 => 150,  235 => 149,  228 => 145,  221 => 141,  214 => 137,  209 => 134,  206 => 133,  194 => 124,  158 => 91,  100 => 36,  94 => 32,  91 => 31,  83 => 27,  81 => 26,  76 => 24,  69 => 21,  60 => 15,  49 => 7,  44 => 4,  41 => 3,  38 => 2,  11 => 1,);
    }
}
