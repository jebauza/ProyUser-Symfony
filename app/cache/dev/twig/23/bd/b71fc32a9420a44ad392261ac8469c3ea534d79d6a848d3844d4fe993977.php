<?php

/* RmsMarcacionesBundle:Default:calendario.html.twig */
class __TwigTemplate_23bdb71fc32a9420a44ad392261ac8469c3ea534d79d6a848d3844d4fe993977 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'activemarcaciones' => array($this, 'block_activemarcaciones'),
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
        echo "-Marcaciones";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rmsmarcaciones/css/marcaciones.css"), "html", null, true);
        echo "\">
";
    }

    // line 11
    public function block_activemarcaciones($context, array $blocks = array())
    {
        echo "class=\"active\"";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "



    <div class=\"bs-docs-section container\">


    <div class=\"row\">
    <div class=\"col-xs-3\" id=\"lateral\">
        <div id=\"filtro\" class=\"panel col-xs-12\">
            <div class=\"panel-heading \"><span class=\"glyphicon glyphicon-search\"></span>Filtro</div>

            <form role=\"form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("rms_marcaciones_busqueda_mes_anno");
        echo "\">
                <div class=\"form-group \">
                    ";
        // line 27
        list($context["anno"], $context["annIniMarc"], $context["mesEscojido"], $context["mesI"], $context["mesF"]) =         array($this->getAttribute($this->getAttribute((isset($context["arrDatosInformativos"]) ? $context["arrDatosInformativos"] : $this->getContext($context, "arrDatosInformativos")), "datosAnnoMarcacion", array(), "array"), "annoEscojido", array(), "array"), $this->getAttribute($this->getAttribute((isset($context["arrDatosInformativos"]) ? $context["arrDatosInformativos"] : $this->getContext($context, "arrDatosInformativos")), "datosAnnoMarcacion", array(), "array"), "annoIni", array(), "array"), $this->getAttribute($this->getAttribute((isset($context["arrDatosInformativos"]) ? $context["arrDatosInformativos"] : $this->getContext($context, "arrDatosInformativos")), "datosAnnoMarcacion", array(), "array"), "mesEscojido", array(), "array"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["arrDatosInformativos"]) ? $context["arrDatosInformativos"] : $this->getContext($context, "arrDatosInformativos")), "datosAnnoMarcacion", array(), "array"), "meses", array(), "array"), "ini", array(), "array"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["arrDatosInformativos"]) ? $context["arrDatosInformativos"] : $this->getContext($context, "arrDatosInformativos")), "datosAnnoMarcacion", array(), "array"), "meses", array(), "array"), "fin", array(), "array"));
        // line 28
        echo "                    ";
        $context["arrMeses"] = array(0 => "Enero", 1 => "Febrero", 2 => "Marzo", 3 => "Abril", 4 => "Mayo", 5 => "Junio", 6 => "Julio", 7 => "Agosto", 8 => "Septiembre", 9 => "Octubre", 10 => "Noviembre", 11 => "Diciembre");
        // line 29
        echo "                    <input type=\"hidden\" id=\"meses\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arrDatosInformativos"]) ? $context["arrDatosInformativos"] : $this->getContext($context, "arrDatosInformativos")), "datosAnnoMarcacion", array(), "array"), "textoPeriodoMarcaciones", array(), "array"), "html", null, true);
        echo "\" />
                    <label for=\"sel2 \" class=\"col-sm-3\">Año:</label>
                    <select class=\"form-control col-sm-9 input-sm\" id=\"sel2\" name=\"_anno\">
                        <option value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["anno"]) ? $context["anno"] : $this->getContext($context, "anno")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["anno"]) ? $context["anno"] : $this->getContext($context, "anno")), "html", null, true);
        echo "</option>
                        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (isset($context["annIniMarc"]) ? $context["annIniMarc"] : $this->getContext($context, "annIniMarc"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) != (isset($context["anno"]) ? $context["anno"] : $this->getContext($context, "anno")))) {
                // line 34
                echo "                           <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</option>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </select>

                    <td> <label class=\"col-sm-3\"  for=\"sel1\">Mes:</label>
                        <select class=\"form-control  col-sm-9 input-sm\" id=\"sel1\" name=\"_mes\">
                            <option value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["mesEscojido"]) ? $context["mesEscojido"] : $this->getContext($context, "mesEscojido")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arrMeses"]) ? $context["arrMeses"] : $this->getContext($context, "arrMeses")), ((isset($context["mesEscojido"]) ? $context["mesEscojido"] : $this->getContext($context, "mesEscojido")) - 1), array(), "array"), "html", null, true);
        echo "</option>
                            ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["mesI"]) ? $context["mesI"] : $this->getContext($context, "mesI")), (isset($context["mesF"]) ? $context["mesF"] : $this->getContext($context, "mesF"))));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            if (((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) != ((isset($context["mesEscojido"]) ? $context["mesEscojido"] : $this->getContext($context, "mesEscojido")) * 1))) {
                // line 42
                echo "                                ";
                $context["mesNum"] = ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) * 1);
                // line 43
                echo "                                ";
                if (((isset($context["mesNum"]) ? $context["mesNum"] : $this->getContext($context, "mesNum")) < 10)) {
                    // line 44
                    echo "                                    ";
                    $context["mesNum"] = ("0" . ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) * 1));
                    // line 45
                    echo "                                ";
                }
                // line 46
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["mesNum"]) ? $context["mesNum"] : $this->getContext($context, "mesNum")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arrMeses"]) ? $context["arrMeses"] : $this->getContext($context, "arrMeses")), (((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) * 1) - 1), array(), "array"), "html", null, true);
                echo "</option>
                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        </select></td>

                </div>
                <button type=\"submit\" class=\"btn btn-default right\">Buscar</button>
            </form>

        </div>

        <div id=\"reporte\" class=\"panel col-xs-12 \">
            <div class=\"panel-heading \"><span class=\"glyphicon glyphicon-stats\"></span>Reporte</div>
            <dl class=\"dl-horizontal\">
                <dt>Dias laborables:</dt>
                <dd><em>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arrDatosInformativos"]) ? $context["arrDatosInformativos"] : $this->getContext($context, "arrDatosInformativos")), "dias_laborables", array(), "array"), "html", null, true);
        echo "</em></dd>
                <dt>Dias trabajados</dt>
                <dd><em>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arrDatosInformativos"]) ? $context["arrDatosInformativos"] : $this->getContext($context, "arrDatosInformativos")), "dias_trabajados", array(), "array"), "html", null, true);
        echo "</em></dd>
                <dt>Dias feriados:</dt>
                <dd>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arrDatosInformativos"]) ? $context["arrDatosInformativos"] : $this->getContext($context, "arrDatosInformativos")), "dias_feriados", array(), "array"), "html", null, true);
        echo "</dd>
                <dt>Ausencias:</dt>
                <dd>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arrDatosInformativos"]) ? $context["arrDatosInformativos"] : $this->getContext($context, "arrDatosInformativos")), "ausencias", array(), "array"), "html", null, true);
        echo "</dd>
                <dt>Impuntualidades:</dt>
                <dd><em>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arrDatosInformativos"]) ? $context["arrDatosInformativos"] : $this->getContext($context, "arrDatosInformativos")), "Impuntualidades", array(), "array"), "html", null, true);
        echo "</em></dd>
                <dt>Viatico total:</dt>
                <dd><em>";
        // line 70
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["arrDatosInformativos"]) ? $context["arrDatosInformativos"] : $this->getContext($context, "arrDatosInformativos")), "dias_laborables", array(), "array") * 0.6), "html", null, true);
        echo " cuc</em></dd>
                <dt>Viatico a cobrar:</dt>
                <dd class=\"text-danger\"> <em>";
        // line 72
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["arrDatosInformativos"]) ? $context["arrDatosInformativos"] : $this->getContext($context, "arrDatosInformativos")), "dias_trabajados", array(), "array") * 0.6), "html", null, true);
        echo " cuc</em></dd>
            </dl>
        </div>

    </div>





";
        // line 84
        echo "<div class=\"col-xs-9 \" >
            <div class=\"panel col-xs-12 \">
                <div class=\"panel-heading \">Reporte de marcaciones del mes de ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arrDatosAnnoMes"]) ? $context["arrDatosAnnoMes"] : $this->getContext($context, "arrDatosAnnoMes")), "mes", array(), "array"), "nombre", array(), "array"), "html", null, true);
        echo " del ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arrDatosAnnoMes"]) ? $context["arrDatosAnnoMes"] : $this->getContext($context, "arrDatosAnnoMes")), "anno", array(), "array"), "html", null, true);
        echo "</div>
                <div class=\"calendario\">
                    <table class=\"table table-bordered  \">

                        <thead>
                        <tr>
                            <th>Sem</th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miecoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                            <th>Sabado</th>
                            <th>Domingo</th>
                        </tr>
                        </thead>
                        <tbody>

                        ";
        // line 104
        $context["arrFeriados"] = array("0101" => true, "0102" => true, "0501" => true, "0725" => true, "0726" => true, "0727" => true, "1010" => true, "1225" => true, "1231" => true);
        // line 105
        echo "                        ";
        $context["numDiasdibujado"] = 0;
        // line 106
        echo "                        ";
        $context["diaSemanaPrimerDiaDelMes"] = $this->getAttribute((isset($context["arrDatosAnnoMes"]) ? $context["arrDatosAnnoMes"] : $this->getContext($context, "arrDatosAnnoMes")), "diaSemanaPrimerDiaDelMes", array(), "array");
        // line 107
        echo "                        ";
        $context["cantDiasMes"] = $this->getAttribute((isset($context["arrDatosAnnoMes"]) ? $context["arrDatosAnnoMes"] : $this->getContext($context, "arrDatosAnnoMes")), "cant_dias_mes", array(), "array");
        // line 108
        echo "                        ";
        $context["cantDiasMarcados"] = $this->getAttribute((isset($context["arrDatosInformativos"]) ? $context["arrDatosInformativos"] : $this->getContext($context, "arrDatosInformativos")), "dias_trabajados", array(), "array");
        // line 109
        echo "                        ";
        $context["fecha"] = "";
        // line 110
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            if (((isset($context["numDiasdibujado"]) ? $context["numDiasdibujado"] : $this->getContext($context, "numDiasdibujado")) < (isset($context["cantDiasMes"]) ? $context["cantDiasMes"] : $this->getContext($context, "cantDiasMes")))) {
                // line 111
                echo "                            <tr class=\"\" >
                                <td>";
                // line 112
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</td>
                                ";
                // line 113
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    // line 114
                    echo "                                   ";
                    if (((((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) < (isset($context["diaSemanaPrimerDiaDelMes"]) ? $context["diaSemanaPrimerDiaDelMes"] : $this->getContext($context, "diaSemanaPrimerDiaDelMes"))) && ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) || ((isset($context["numDiasdibujado"]) ? $context["numDiasdibujado"] : $this->getContext($context, "numDiasdibujado")) >= (isset($context["cantDiasMes"]) ? $context["cantDiasMes"] : $this->getContext($context, "cantDiasMes"))))) {
                        // line 115
                        echo "                                       <td></td>
                                   ";
                    } else {
                        // line 117
                        echo "
                                       ";
                        // line 118
                        $context["numDiasdibujado"] = ((isset($context["numDiasdibujado"]) ? $context["numDiasdibujado"] : $this->getContext($context, "numDiasdibujado")) + 1);
                        // line 119
                        echo "                                       ";
                        $context["fecha"] = ($this->getAttribute((isset($context["arrDatosAnnoMes"]) ? $context["arrDatosAnnoMes"] : $this->getContext($context, "arrDatosAnnoMes")), "codigo", array(), "array") . (isset($context["numDiasdibujado"]) ? $context["numDiasdibujado"] : $this->getContext($context, "numDiasdibujado")));
                        // line 120
                        echo "                                       ";
                        if (((isset($context["numDiasdibujado"]) ? $context["numDiasdibujado"] : $this->getContext($context, "numDiasdibujado")) < 10)) {
                            // line 121
                            echo "                                           ";
                            $context["fecha"] = (($this->getAttribute((isset($context["arrDatosAnnoMes"]) ? $context["arrDatosAnnoMes"] : $this->getContext($context, "arrDatosAnnoMes")), "codigo", array(), "array") . "0") . (isset($context["numDiasdibujado"]) ? $context["numDiasdibujado"] : $this->getContext($context, "numDiasdibujado")));
                            // line 122
                            echo "                                       ";
                        }
                        // line 123
                        echo "
                                ";
                        // line 125
                        echo "                                  ";
                        if ($this->getAttribute($this->getAttribute((isset($context["arrMarcPorFecha"]) ? $context["arrMarcPorFecha"] : null), (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), array(), "array", false, true), "tipoCasilla", array(), "array", true, true)) {
                            // line 126
                            echo "                                       ";
                            if (($this->getAttribute($this->getAttribute((isset($context["arrMarcPorFecha"]) ? $context["arrMarcPorFecha"] : $this->getContext($context, "arrMarcPorFecha")), (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), array(), "array"), "tipoCasilla", array(), "array") == "conMarcacionesERROR")) {
                                // line 127
                                echo "                                           <td class=\"alert alert-danger \" ><p   class=\"dia\"><em >";
                                echo twig_escape_filter($this->env, (isset($context["numDiasdibujado"]) ? $context["numDiasdibujado"] : $this->getContext($context, "numDiasdibujado")), "html", null, true);
                                echo "</em></p><p>";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["arrMarcPorFecha"]) ? $context["arrMarcPorFecha"] : $this->getContext($context, "arrMarcPorFecha")), (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), array(), "array"), "marcaciones", array(), "array"), 0, array(), "array"), "hora", array(), "array"), "html", null, true);
                                echo "<br/>";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["arrMarcPorFecha"]) ? $context["arrMarcPorFecha"] : $this->getContext($context, "arrMarcPorFecha")), (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), array(), "array"), "marcaciones", array(), "array"), (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arrMarcPorFecha"]) ? $context["arrMarcPorFecha"] : $this->getContext($context, "arrMarcPorFecha")), (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), array(), "array"), "marcaciones", array(), "array")) - 1), array(), "array"), "hora", array(), "array"), "html", null, true);
                                echo "<span class=\"pull-right glyphicon glyphicon-bell\"></span></p></td>
                                       ";
                            } elseif (($this->getAttribute($this->getAttribute((isset($context["arrMarcPorFecha"]) ? $context["arrMarcPorFecha"] : $this->getContext($context, "arrMarcPorFecha")), (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), array(), "array"), "tipoCasilla", array(), "array") == "conMarcacionesOK")) {
                                // line 129
                                echo "                                           <td><p  class=\"dia\"><em >";
                                echo twig_escape_filter($this->env, (isset($context["numDiasdibujado"]) ? $context["numDiasdibujado"] : $this->getContext($context, "numDiasdibujado")), "html", null, true);
                                echo "</em></p><p>";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["arrMarcPorFecha"]) ? $context["arrMarcPorFecha"] : $this->getContext($context, "arrMarcPorFecha")), (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), array(), "array"), "marcaciones", array(), "array"), 0, array(), "array"), "hora", array(), "array"), "html", null, true);
                                echo "<br/>";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["arrMarcPorFecha"]) ? $context["arrMarcPorFecha"] : $this->getContext($context, "arrMarcPorFecha")), (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), array(), "array"), "marcaciones", array(), "array"), (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arrMarcPorFecha"]) ? $context["arrMarcPorFecha"] : $this->getContext($context, "arrMarcPorFecha")), (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), array(), "array"), "marcaciones", array(), "array")) - 1), array(), "array"), "hora", array(), "array"), "html", null, true);
                                echo "</p></td>
                                       ";
                            } elseif (($this->getAttribute($this->getAttribute((isset($context["arrMarcPorFecha"]) ? $context["arrMarcPorFecha"] : $this->getContext($context, "arrMarcPorFecha")), (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), array(), "array"), "tipoCasilla", array(), "array") == "sabado_domingo")) {
                                // line 131
                                echo "                                           <td><p  class=\"dia\"><em >";
                                echo twig_escape_filter($this->env, (isset($context["numDiasdibujado"]) ? $context["numDiasdibujado"] : $this->getContext($context, "numDiasdibujado")), "html", null, true);
                                echo "</em></p></td>
                                       ";
                            } elseif (($this->getAttribute($this->getAttribute((isset($context["arrMarcPorFecha"]) ? $context["arrMarcPorFecha"] : $this->getContext($context, "arrMarcPorFecha")), (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), array(), "array"), "tipoCasilla", array(), "array") == "feriado")) {
                                // line 133
                                echo "                                           <td class=\"alert alert-info\"><p  class=\"dia\"><em>";
                                echo twig_escape_filter($this->env, (isset($context["numDiasdibujado"]) ? $context["numDiasdibujado"] : $this->getContext($context, "numDiasdibujado")), "html", null, true);
                                echo "</em></p><p>Feriado</p></td>
                                       ";
                            } elseif (($this->getAttribute($this->getAttribute((isset($context["arrMarcPorFecha"]) ? $context["arrMarcPorFecha"] : $this->getContext($context, "arrMarcPorFecha")), (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), array(), "array"), "tipoCasilla", array(), "array") == "ausencia")) {
                                // line 135
                                echo "                                           <td class=\"alert alert-warning\"><p  class=\"dia\"><em >";
                                echo twig_escape_filter($this->env, (isset($context["numDiasdibujado"]) ? $context["numDiasdibujado"] : $this->getContext($context, "numDiasdibujado")), "html", null, true);
                                echo "</em></p><p>Ausencia</p></td>
                                       ";
                            } else {
                                // line 137
                                echo "                                           <td><p  class=\"dia\"><em >";
                                echo twig_escape_filter($this->env, (isset($context["numDiasdibujado"]) ? $context["numDiasdibujado"] : $this->getContext($context, "numDiasdibujado")), "html", null, true);
                                echo "</em></p></td>
                                       ";
                            }
                            // line 139
                            echo "                                  ";
                        } else {
                            // line 140
                            echo "                                      <td><p  class=\"dia\"><em >";
                            echo twig_escape_filter($this->env, (isset($context["numDiasdibujado"]) ? $context["numDiasdibujado"] : $this->getContext($context, "numDiasdibujado")), "html", null, true);
                            echo "</em></p></td>
                                  ";
                        }
                        // line 142
                        echo "                                ";
                        // line 143
                        echo "



                                   ";
                    }
                    // line 148
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "                            </tr>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                        </tbody>
                    </table>

                </div>
                <div id=\"leyenda\">
                    <ul class=\"list-inline\">
                        <li>Hoy<div class=\"alert-success\"></div> </li>
                        <li>Feriado<div class=\"alert-info\"></div></li>
                        <li>Impuntualidades<div class=\"alert-danger\"></div></li>
                        <li>Ausencias<div class=\"alert-warning\"></div></li>
                    </ul>
                </div>
            </div>

        </div>";
        // line 175
        echo "</div>
    </div>
";
    }

    // line 179
    public function block_javascripts($context, array $blocks = array())
    {
        // line 180
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rmsmarcaciones/js/marcaciones.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "RmsMarcacionesBundle:Default:calendario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 181,  410 => 180,  407 => 179,  401 => 175,  385 => 152,  377 => 150,  370 => 148,  363 => 143,  361 => 142,  355 => 140,  352 => 139,  346 => 137,  340 => 135,  334 => 133,  328 => 131,  318 => 129,  308 => 127,  305 => 126,  302 => 125,  299 => 123,  296 => 122,  293 => 121,  290 => 120,  287 => 119,  285 => 118,  282 => 117,  278 => 115,  275 => 114,  271 => 113,  267 => 112,  264 => 111,  258 => 110,  255 => 109,  252 => 108,  249 => 107,  246 => 106,  243 => 105,  241 => 104,  218 => 86,  214 => 84,  201 => 72,  196 => 70,  191 => 68,  186 => 66,  181 => 64,  176 => 62,  171 => 60,  157 => 48,  145 => 46,  142 => 45,  139 => 44,  136 => 43,  133 => 42,  128 => 41,  122 => 40,  116 => 36,  104 => 34,  99 => 33,  93 => 32,  86 => 29,  83 => 28,  81 => 27,  76 => 25,  62 => 13,  59 => 12,  53 => 11,  47 => 7,  42 => 6,  39 => 5,  32 => 3,);
    }
}
