<?php

/* ArchivoBibliotecaBundle:Documentos:general.html.twig */
class __TwigTemplate_967ad87194864226999b5b5c9e903cbcc22d0f2f8a9ea7c624a344bfd9452e13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div>
    <form role=\"form\" class=\"form-inline\" method=\"post\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("prestamos_busqueda_prestamos");
        echo "\">
<fieldset >
    ";
        // line 5
        list($context["tipo"], $context["titulo"], $context["fechaIni"], $context["fechaFin"]) =         array("", "", "", "");
        // line 6
        echo "    ";
        if ($this->getAttribute((isset($context["arrCamposPrestamo"]) ? $context["arrCamposPrestamo"] : null), "titulo", array(), "any", true, true)) {
            // line 7
            echo "        ";
            $context["titulo"] = $this->getAttribute((isset($context["arrCamposLibro"]) ? $context["arrCamposLibro"] : $this->getContext($context, "arrCamposLibro")), "titulo");
            // line 8
            echo "    ";
        }
        // line 9
        echo "    ";
        if ($this->getAttribute((isset($context["arrCamposPrestamo"]) ? $context["arrCamposPrestamo"] : null), "fechaIni", array(), "any", true, true)) {
            // line 10
            echo "        ";
            $context["fechaIni"] = $this->getAttribute((isset($context["arrCamposLibro"]) ? $context["arrCamposLibro"] : $this->getContext($context, "arrCamposLibro")), "fechaIni");
            // line 11
            echo "    ";
        }
        // line 12
        echo "    ";
        if ($this->getAttribute((isset($context["arrCamposPrestamo"]) ? $context["arrCamposPrestamo"] : null), "fechaFin", array(), "any", true, true)) {
            // line 13
            echo "        ";
            $context["fechaFin"] = $this->getAttribute((isset($context["arrCamposLibro"]) ? $context["arrCamposLibro"] : $this->getContext($context, "arrCamposLibro")), "fechaFin");
            // line 14
            echo "    ";
        }
        // line 15
        echo "
        <label for=\"\">Tipo</label>
        <select name=\"_tipo\" id=\"tipo\" class=\"form-control\">
            <option value=\"\"></option>
            <option value=\"libro\">Libro</option>
            <option value=\"revista\">Revista</option>
            <option value=\"revista\">Archivo</option>
        </select>
        <label for=\"\">Titulo</label>
        <input type=\"text\" class=\"form-control\" name=\"_titulo\" id=\"titulo\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : $this->getContext($context, "titulo")), "html", null, true);
        echo "\"/>
        <label for=\"\">Fecha inicio</label>
        <input type=\"text\" class=\"form-control\" name=\"_fechaIni\" id=\"fechaIni\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["fechaIni"]) ? $context["fechaIni"] : $this->getContext($context, "fechaIni")), "html", null, true);
        echo "\"/>
        <label for=\"\">Fecha final</label>
        <input type=\"text\" class=\"form-control\" name=\"_fechaFin\" id=\"fechaFin\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["fechaFin"]) ? $context["fechaFin"] : $this->getContext($context, "fechaFin")), "html", null, true);
        echo "\"/>

        <button type=\"submit\" class=\"btn btn-default pull-right\"><span class=\"glyphicon glyphicon-search\"></span>Buscar</button>
</fieldset>
    </form>

</div>

";
        // line 36
        if (array_key_exists("arrPrestamos", $context)) {
            // line 37
            echo "<div class=\"col-xs-12 \">
    <div class=\"table-responsive\" data-pattern=\"priority-columns\" >
        <table id=\"\" class=\"table table-small-font  example\">
            <thead>
            <tr>
                <th >Estado y Fecha</th>
                <th >Lugar de Entrega</th>
                <th >Documento</th>


                <th></th>

                <th>Observacion</th>
                <th >Usuario prestamo</th>
            </tr>
            </thead>
            <tbody>

            ";
            // line 55
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arrPrestamos"]) ? $context["arrPrestamos"] : $this->getContext($context, "arrPrestamos")));
            foreach ($context['_seq'] as $context["_key"] => $context["prestamo"]) {
                // line 56
                echo "                ";
                $context["lugarEntrega"] = "ARCHIVO";
                // line 57
                echo "                ";
                if ((twig_slice($this->env, $this->getAttribute((isset($context["prestamo"]) ? $context["prestamo"] : $this->getContext($context, "prestamo")), "tabla"), (-10)) == "biblioteca")) {
                    // line 58
                    echo "                    ";
                    $context["lugarEntrega"] = "BIBLIOTECA";
                    // line 59
                    echo "                ";
                }
                // line 60
                echo "                <tr>
                    <td >";
                // line 61
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["prestamo"]) ? $context["prestamo"] : $this->getContext($context, "prestamo")), "estado_prestamo")), "html", null, true);
                echo "</td>
                    <td >";
                // line 62
                echo twig_escape_filter($this->env, (isset($context["lugarEntrega"]) ? $context["lugarEntrega"] : $this->getContext($context, "lugarEntrega")), "html", null, true);
                echo "</td>
                    <td >";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prestamo"]) ? $context["prestamo"] : $this->getContext($context, "prestamo")), "tipo_documento"), "html", null, true);
                echo " -> \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prestamo"]) ? $context["prestamo"] : $this->getContext($context, "prestamo")), "titulo_documento"), "html", null, true);
                echo "\"</td>
                    ";
                // line 64
                list($context["fechaPres"], $context["fechaDev"]) =                 array(((((twig_slice($this->env, $this->getAttribute((isset($context["prestamo"]) ? $context["prestamo"] : $this->getContext($context, "prestamo")), "fecha_prestamos"), 0, 4) . "-") . twig_slice($this->env, $this->getAttribute((isset($context["prestamo"]) ? $context["prestamo"] : $this->getContext($context, "prestamo")), "fecha_prestamos"), 4, 2)) . "-") . twig_slice($this->env, $this->getAttribute((isset($context["prestamo"]) ? $context["prestamo"] : $this->getContext($context, "prestamo")), "fecha_prestamos"), 6, 2)), ((((twig_slice($this->env, $this->getAttribute((isset($context["prestamo"]) ? $context["prestamo"] : $this->getContext($context, "prestamo")), "fecha_devolcion"), 0, 4) . "-") . twig_slice($this->env, $this->getAttribute((isset($context["prestamo"]) ? $context["prestamo"] : $this->getContext($context, "prestamo")), "fecha_devolcion"), 4, 2)) . "-") . twig_slice($this->env, $this->getAttribute((isset($context["prestamo"]) ? $context["prestamo"] : $this->getContext($context, "prestamo")), "fecha_devolcion"), 6, 2)));
                // line 65
                echo "                    <td >";
                echo twig_escape_filter($this->env, (((isset($context["fechaPres"]) ? $context["fechaPres"] : $this->getContext($context, "fechaPres")) . " -> ") . (isset($context["fechaDev"]) ? $context["fechaDev"] : $this->getContext($context, "fechaDev"))), "html", null, true);
                echo "</td>

                    <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prestamo"]) ? $context["prestamo"] : $this->getContext($context, "prestamo")), "observaciones"), "html", null, true);
                echo "</td>
                    <td >";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prestamo"]) ? $context["prestamo"] : $this->getContext($context, "prestamo")), "nombre_usuario"), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prestamo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "            </tbody>
        </table>
    </div>


</div>
";
        }
    }

    public function getTemplateName()
    {
        return "ArchivoBibliotecaBundle:Documentos:general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 71,  156 => 68,  152 => 67,  146 => 65,  144 => 64,  138 => 63,  134 => 62,  130 => 61,  127 => 60,  124 => 59,  121 => 58,  118 => 57,  115 => 56,  111 => 55,  91 => 37,  89 => 36,  78 => 28,  73 => 26,  68 => 24,  57 => 15,  54 => 14,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  36 => 8,  33 => 7,  30 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
