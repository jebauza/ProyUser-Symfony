<?php

/* UsuarioBundle:Directorio:directorio.html.twig */
class __TwigTemplate_a6d50af70fe4ee03138dcbd7cbd10beec484f3ff8fcb483229cfc977b3456a15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'user' => array($this, 'block_user'),
            'activedirectorio' => array($this, 'block_activedirectorio'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo "-Directorio";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/usuario/css/directorio/directorio.css"), "html", null, true);
        echo "\">
";
    }

    // line 8
    public function block_user($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nombre")), "html", null, true);
    }

    // line 9
    public function block_activedirectorio($context, array $blocks = array())
    {
        echo "class=\"active\"";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    <div class=\"bs-docs-section container\">
    <div  class=\"panel \">
    <div class=\"row\">
    <div class=\"col-xs-12 \" >
    <div class=\"panel-heading \"><span class=\"glyphicon glyphicon-search\"></span>Directorio de personas</div>

    <!--filtro principal Nombre y apellidos -->
    <div class=\" col-xs-6\" id=\"search-nombre\">
        <div class=\"input-group \">
            <input type=\"text\" class=\"form-control\" id=\"nombre\" placeholder=\"Nombre y Apellidos\" required=\"required\">
            <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("directorio_busqueda", array("filtros" => "atr1", "pag" => "0")), "html", null, true);
        echo "\"  class=\"buscar input-group-addon \"><i class=\"glyphicon glyphicon-search\"></i></a>
        </div>
    </div>
    <!--seleccionador de filtros auxiliares -->
    <div class=\"col-xs-3\" id=\"seleccionar-filtro\" >
        <select class=\"form-control \"  title=\"Filtro\" id=\"filtro\">
            <option>--Seleccione los filtros--</option>
            <option value=\"municipio\" >Municipio</option>
            <option value=\"cargo\">Cargo</option>
            <option value=\"area\">Area</option>
            <option value=\"cubiculo\">Cubiculo</option>
            <option value=\"telefono\">Telefono</option>
            <option value=\"piso\">Piso</option>
        </select>
    </div>
    <div class=\"clearfix\"></div>
        <input type=\"hidden\" id=\"valores-filtros\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")), "html", null, true);
        echo "\"/>
    <!--Filtros auxiliares -->
     <!--Filtros auxiliares -->
     <div class=\"group-filtros\">
         <div class=\"col-xs-3  filtros\" >Municipio<a href=\"#\"><span class=\"glyphicon glyphicon-remove pull-right\"></span></a>
             <select class=\"form-control input-sm\" name=\"municipio\"  id=\"municipio\">
                 <option value=\"\"></option>
                 <option value=\"Arroyo Naranjo\">Arroyo Naranjo</option>
                 <option value=\"Boyeros\">Boyeros</option>
                 <option value=\"Centro Habana\">Centro Habana</option>
                 <option value=\"Cerro\">Cerro</option>
                 <option value=\"Cotorro\">Cotorro</option>
                 <option value=\"Dies de octubre\">Dies de octubre</option>
                 <option value=\"Guanabacoa\">Guanabacoa</option>
                 <option value=\"Habana del Este\">Habana del Este</option>
                 <option value=\"Habana Vieja\">Habana Vieja</option>
                 <option value=\"Marianao\">Marianao</option>
                 <option value=\"La Lisa\">La Lisa</option>
                 <option value=\"Plaza\">Plaza</option>
                 <option value=\"Playa\">Playa</option>
                 <option value=\"San Miguel del padron\">San Miguel</option>
                 <option value=\"Regla\">Regla</option>
             </select></div>
         <div class=\"col-xs-4  filtros\" >Cargo<a href=\"#\"><span class=\"glyphicon glyphicon-remove pull-right\"></span></a>
             <input type=\"text\" id=\"cargo\" name=\"cargo\" class=\"form-control\" /></div>
         <div class=\"col-xs-4  filtros \" >Area<a href=\"#\"><span class=\"glyphicon glyphicon-remove pull-right\"></span></a>
             <input type=\"text\" id=\"area\" name=\"area\" class=\"form-control\" />
         </div>
         <div class=\"col-xs-4  filtros\" >Cubiculo<a href=\"#\"><span class=\"glyphicon glyphicon-remove pull-right\"></span></a>
             <select class=\"form-control input-sm\" id=\"cubiculo\" name=\"cubiculo\" >
                 <option value=\"\"></option>
                 <option value=\"\"></option>
                 <option value=\"\"></option>
                 <option value=\"\"></option>
                 <option value=\"\"></option>
                 <option value=\"\"></option>
             </select></div>
         <div class=\"col-xs-4  filtros\" >Telefono<a href=\"#\"><span class=\"glyphicon glyphicon-remove pull-right\"></span></a>
             <select class=\"form-control input-sm\" id=\"telefono\" name=\"telefono\" >
                 <option value=\"\"></option>
                 <option value=\"\"></option>
                 <option value=\"\"></option>
                 <option value=\"\"></option>
                 <option value=\"\"></option>
                 <option value=\"\"></option>
             </select></div>
         <div class=\"col-xs-4  filtros\">Piso<a href=\"#\"><span class=\"glyphicon glyphicon-remove pull-right\"></span></a>
             <select class=\"form-control input-sm \" id=\"piso\" name=\"piso\" >
                 <option value=\"\"></option>
                 <option value=\"1\">1</option>
                 <option value=\"2\">2</option>
                 <option value=\"3\">3</option>
                 <option value=\"4\">4</option>
                 <option value=\"5\">5</option>
                 <option value=\"6\">6</option>
             </select>
         </div>
     </div>
    <!-- Resultado de la busqueda-->
        <div class=\"personas col-xs-12 \">
        <!-- Seleccionador de paginacion-->
        <div class=\"select-paginacion col-lg-4 col-xs-12  pull-right form-inline \">
            <label for=\"num-page\" class=\"\">Paginas a mostrar</label>
            <select class=\"form-control input-sm \" name=\"num-page\" >
                <option value=\"\"></option>
                <option value=\"\"></option>
                <option value=\"\"></option>
                <option value=\"\"></option>
                <option value=\"\"></option>
                <option value=\"\"></option>
            </select>
        </div>


        <!-- Resultado de la busqueda-->
        <div class=\"col-xs-12   table-lg\">
            <table class=\"table  table-striped \">
                <tbody>



            ";
        // line 118
        $context["cantpersona"] = twig_length_filter($this->env, (isset($context["todasPersonas"]) ? $context["todasPersonas"] : $this->getContext($context, "todasPersonas")));
        // line 119
        echo "             ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["todasPersonas"]) ? $context["todasPersonas"] : $this->getContext($context, "todasPersonas")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
            // line 120
            echo "               ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") < 11)) {
                // line 121
                echo "                <tr >
                    <td>
                        <div class=\"foto\">
                            <img src=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/usuario/images/directorio/Trabajadores/" . $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "fotoNombre"))), "html", null, true);
                echo "\" class=\"img-thumbnail\">
                        </div>
                    </td>
                    <td>
                        <ul class=\"persona-info list-unstyled \">
                            <li><strong>Nombre(s): </strong> ";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "nombre"), "html", null, true);
                echo "</li>
                            <li><strong>Departamento:</strong> ";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "departamento"), "html", null, true);
                echo "</li>
                            <li><strong>Correo: </strong>";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "correo"), "html", null, true);
                echo "</li>
                        </ul>
                    </td>
                    <td>
                        <ul class=\"persona-info list-unstyled\">
                            <li><strong>Cargo:</strong> ";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "cargoActual"), "html", null, true);
                echo "</li>
                            <li><strong>Area:</strong> ";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "area"), "html", null, true);
                echo "</li>
                            <li><strong>Solapin: </strong> ";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "noTarjeta"), "html", null, true);
                echo "</li>
                        </ul>
                    </td>
                    <td>
                        <ul class=\"persona-info list-unstyled \">
                            <li><strong>Municipio:</strong> ";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "municipio"), "html", null, true);
                echo "</li>
                            <li><strong>Piso:</strong> ";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "piso"), "html", null, true);
                echo "</li>
                            <li><strong>Cubiculo:</strong> ";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "cubiculo"), "html", null, true);
                echo "</li>
                            <li><strong>Telefono: </strong> ";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "telefonoOficina"), "html", null, true);
                echo " </li>
                        </ul>
                    </td>
                </tr>
              ";
            }
            // line 151
            echo "             ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['persona'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                </tbody>
            </table>
        </div>



        <nav class=\"paginacion col-lg-4  col-xs-12\">
            <ul class=\"pagination\">
             ";
        // line 160
        if (((isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")) > 0)) {
            // line 161
            echo "                <li>
                    <a href=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("directorio_busqueda", array("filtros" => (isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")), "pag" => ((isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")) - 1))), "html", null, true);
            echo "\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\">&laquo; Anterior </span>
                    </a>
                </li>
             ";
        }
        // line 167
        echo "

                <li><a href=\"#\">";
        // line 169
        echo twig_escape_filter($this->env, ((isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")) + 1), "html", null, true);
        echo "</a></li>
             ";
        // line 170
        if (((isset($context["cantpersona"]) ? $context["cantpersona"] : $this->getContext($context, "cantpersona")) == 11)) {
            // line 171
            echo "                 <li>
                    <a href=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("directorio_busqueda", array("filtros" => (isset($context["filtros"]) ? $context["filtros"] : $this->getContext($context, "filtros")), "pag" => ((isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")) + 1))), "html", null, true);
            echo "\" aria-label=\"Next\">
                        <span aria-hidden=\"true\">Siguiente &raquo;</span>
                    </a>
                </li>
             ";
        }
        // line 177
        echo "            </ul>
        </nav>
    </div >
    </div>
    </div>

    </div>

    </div>
";
    }

    // line 187
    public function block_javascripts($context, array $blocks = array())
    {
        // line 188
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/usuario/js/directorio/directorio.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Directorio:directorio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 189,  346 => 188,  343 => 187,  330 => 177,  322 => 172,  319 => 171,  317 => 170,  313 => 169,  309 => 167,  301 => 162,  298 => 161,  296 => 160,  286 => 152,  272 => 151,  264 => 146,  260 => 145,  256 => 144,  252 => 143,  244 => 138,  240 => 137,  236 => 136,  228 => 131,  224 => 130,  220 => 129,  212 => 124,  207 => 121,  204 => 120,  186 => 119,  184 => 118,  100 => 37,  81 => 21,  69 => 11,  66 => 10,  60 => 9,  54 => 8,  48 => 6,  43 => 5,  40 => 4,  33 => 3,);
    }
}
