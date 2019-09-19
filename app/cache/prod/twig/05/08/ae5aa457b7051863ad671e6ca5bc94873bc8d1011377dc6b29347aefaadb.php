<?php

/* ArchivoBibliotecaBundle:Biblioteca:libro.html.twig */
class __TwigTemplate_0508ae5aa457b7051863ad671e6ca5bc94873bc8d1011377dc6b29347aefaadb extends Twig_Template
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
        echo "<div class=\"col-xs-12\" >
    <div>
        <form id=\"bucsar-libro\" class=\"form-inline\" method=\"post\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("biblioteca_busqueda_libros");
        echo "\">
            <fieldset>
                ";
        // line 5
        list($context["titulo"], $context["autor"], $context["pais"], $context["idioma"], $context["editorial"], $context["categoria"], $context["tema"]) =         array("", "", "", "", "", "", "");
        // line 6
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposLibro"]) ? $context["arrCamposLibro"] : null), "titulo", array(), "any", true, true)) {
            // line 7
            echo "                    ";
            $context["titulo"] = $this->getAttribute((isset($context["arrCamposLibro"]) ? $context["arrCamposLibro"] : $this->getContext($context, "arrCamposLibro")), "titulo");
            // line 8
            echo "                ";
        }
        // line 9
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposLibro"]) ? $context["arrCamposLibro"] : null), "autor", array(), "any", true, true)) {
            // line 10
            echo "                    ";
            $context["autor"] = $this->getAttribute((isset($context["arrCamposLibro"]) ? $context["arrCamposLibro"] : $this->getContext($context, "arrCamposLibro")), "autor");
            // line 11
            echo "                ";
        }
        // line 12
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposLibro"]) ? $context["arrCamposLibro"] : null), "nacion", array(), "any", true, true)) {
            // line 13
            echo "                    ";
            $context["pais"] = $this->getAttribute((isset($context["arrCamposLibro"]) ? $context["arrCamposLibro"] : $this->getContext($context, "arrCamposLibro")), "nacion");
            // line 14
            echo "                ";
        }
        // line 15
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposLibro"]) ? $context["arrCamposLibro"] : null), "idioma", array(), "any", true, true)) {
            // line 16
            echo "                    ";
            $context["idioma"] = $this->getAttribute((isset($context["arrCamposLibro"]) ? $context["arrCamposLibro"] : $this->getContext($context, "arrCamposLibro")), "idioma");
            // line 17
            echo "                ";
        }
        // line 18
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposLibro"]) ? $context["arrCamposLibro"] : null), "editorial", array(), "any", true, true)) {
            // line 19
            echo "                    ";
            $context["editorial"] = $this->getAttribute((isset($context["arrCamposLibro"]) ? $context["arrCamposLibro"] : $this->getContext($context, "arrCamposLibro")), "editorial");
            // line 20
            echo "                ";
        }
        // line 21
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposLibro"]) ? $context["arrCamposLibro"] : null), "categoria", array(), "any", true, true)) {
            // line 22
            echo "                    ";
            $context["categoria"] = $this->getAttribute((isset($context["arrCamposLibro"]) ? $context["arrCamposLibro"] : $this->getContext($context, "arrCamposLibro")), "categoria");
            // line 23
            echo "                ";
        }
        // line 24
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposLibro"]) ? $context["arrCamposLibro"] : null), "tema", array(), "any", true, true)) {
            // line 25
            echo "                    ";
            $context["tema"] = $this->getAttribute((isset($context["arrCamposLibro"]) ? $context["arrCamposLibro"] : $this->getContext($context, "arrCamposLibro")), "tema");
            // line 26
            echo "                ";
        }
        // line 27
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposLibro"]) ? $context["arrCamposLibro"] : null), "sistema_const", array(), "any", true, true)) {
            // line 28
            echo "                    ";
            $context["sistContructivo"] = $this->getAttribute((isset($context["arrCamposLibro"]) ? $context["arrCamposLibro"] : $this->getContext($context, "arrCamposLibro")), "sistema_const");
            // line 29
            echo "                ";
        }
        // line 30
        echo "
            <label for=\"titulo\">Titulo:</label>
            <input type=\"text\"  class=\"form-control input-sm\" id=\"titulo\" name=\"_titulo\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : $this->getContext($context, "titulo")), "html", null, true);
        echo "\"/>
            <label for=\"titulo\">Autor:</label>
            <input type=\"text\"  class=\"form-control input-sm\" id=\"autor\" name=\"_autor\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["autor"]) ? $context["autor"] : $this->getContext($context, "autor")), "html", null, true);
        echo "\"/>
            <label for=\"titulo\">Pais:</label>
            <input type=\"text\"  class=\"form-control input-sm\" id=\"pais\" name=\"_pais\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["pais"]) ? $context["pais"] : $this->getContext($context, "pais")), "html", null, true);
        echo "\"/>
            <label for=\"titulo\">Idioma:</label>
            <input type=\"text\"  class=\"form-control input-sm\" id=\"idioma\" name=\"_idioma\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["idioma"]) ? $context["idioma"] : $this->getContext($context, "idioma")), "html", null, true);
        echo "\"/>
            <label for=\"titulo\">Editorial:</label>
            <input type=\"text\"  class=\"form-control input-sm\" id=\"editorial\" name=\"_editorial\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["editorial"]) ? $context["editorial"] : $this->getContext($context, "editorial")), "html", null, true);
        echo "\"/>
            <label for=\"titulo\">Categoria:</label>
            <input type=\"text\"  class=\"form-control input-sm\" id=\"categoria\" name=\"_categoria\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "html", null, true);
        echo "\"/>
            <label for=\"titulo\">Tema:</label>
            <input type=\"text\"  class=\"form-control input-sm\" id=\"tema\" name=\"_tema\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["tema"]) ? $context["tema"] : $this->getContext($context, "tema")), "html", null, true);
        echo "\"/>
            <button type=\"submit\" class=\"btn btn-default pull-right\"><span class=\"glyphicon glyphicon-search\"></span>Buscar</button>
                </fieldset>
        </form>
    </div>
</div>

";
        // line 51
        if (array_key_exists("arrLibros", $context)) {
            // line 52
            echo "<div class=\"col-xs-12 contenido\">
    <div class=\"table-responsive\" data-pattern=\"priority-columns\" >
        <table id=\"\" class=\"table table-small-font  example\">
            <thead>
            <tr>
                <th>Documento</th>
                <th >Categoria</th>
                <th >Tema</th>

                <th></th>

                <th data-priority=\"1\">Conservacion</th>
                <th data-priority=\"1\">Autor o Institucion</th>
                <th>Idioma y Nación</th>

                <th>Estante</th>
                <th>Nivel</th>
            </tr>
            </thead>
            <tbody>
    ";
            // line 72
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arrLibros"]) ? $context["arrLibros"] : $this->getContext($context, "arrLibros")));
            foreach ($context['_seq'] as $context["_key"] => $context["libro"]) {
                // line 73
                echo "            <tr>
                <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "tipo_documento"), "html", null, true);
                echo " -> </td>
                <td >";
                // line 75
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "categoria")), "html", null, true);
                echo "</td>
                <td >";
                // line 76
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "tema")), "html", null, true);
                echo "</td>

                <td >";
                // line 78
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "titulo")), "html", null, true);
                echo "</td>

                <td data-priority=\"1\">";
                // line 80
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "conservacion")), "html", null, true);
                echo "</td>
                <td data-priority=\"1\">";
                // line 81
                echo twig_escape_filter($this->env, (twig_title_string_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "apell_nombre_autor")) . twig_title_string_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "institucion"))), "html", null, true);
                echo "</td>
                <td>";
                // line 82
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "idioma")), "html", null, true);
                echo " -> (";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "nacion")), "html", null, true);
                echo ")</td>

                <td>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "estante"), "html", null, true);
                echo "</td>
                <td>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "nivel"), "html", null, true);
                echo "</td>
            </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['libro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "

            </tbody>
        </table>
    </div>
</div>
";
        }
        // line 95
        echo "







";
        // line 103
        if (array_key_exists("arrlibros", $context)) {
            // line 104
            echo "    <div class=\"col-xs-12 contenido\" >
        <div class=\"table-responsive\" data-pattern=\"priority-columns\" >
            <table  class=\"table table-small-font table-bordered table-striped example\">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th data-priority=\"1\">Nombre Actual</th>
                    <th>Proyectista</th>
                    <th>Anno</th>
                    <th data-priority=\"1\">Programa</th>
                    <th data-priority=\"1\">Sis Constructivo</th>
                    <th data-priority=\"1\">Especialidad</th>
                    <th data-priority=\"1\">Etapa</th>
                    <th data-priority=\"1\">Observacion</th>
                    <th>Cubiculo</th>
                    <th>Estante</th>
                    <th>Casilla</th>
                </tr>
                </thead>

                <tbody>

                ";
            // line 126
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arrProyectos"]) ? $context["arrProyectos"] : $this->getContext($context, "arrProyectos")));
            foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
                // line 127
                echo "                    <tr>
                        <td >";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "nombre"), "html", null, true);
                echo "</td>
                        <td data-priority=\"1\">";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "nombre_actual"), "html", null, true);
                echo "</td>
                        <td>";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "nombre_proyectista"), "html", null, true);
                echo "</td>
                        <td>1987</td>
                        <td data-priority=\"1\">";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "programa"), "html", null, true);
                echo "</td>
                        <td data-priority=\"1\">";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "sistema_construccion"), "html", null, true);
                echo "</td>
                        <td data-priority=\"1\">HIDRAULICA</td>
                        <td data-priority=\"1\">PROYECTO TECNICO EJECUTIVO</td>
                        <td data-priority=\"1\">HIDROSANITARIA, PRIMER SOTANO MODULO III, AIRE ACONDICIONADO</td>
                        <td>20</td>
                        <td>F</td>
                        <td>74-3</td>

                    </tr>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "

                </tbody>
            </table>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "ArchivoBibliotecaBundle:Biblioteca:libro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 144,  292 => 133,  288 => 132,  283 => 130,  279 => 129,  275 => 128,  272 => 127,  268 => 126,  244 => 104,  232 => 95,  223 => 88,  214 => 85,  203 => 82,  190 => 78,  148 => 52,  136 => 44,  131 => 42,  126 => 40,  116 => 36,  259 => 107,  251 => 101,  242 => 103,  238 => 97,  234 => 96,  230 => 95,  224 => 94,  220 => 93,  215 => 91,  210 => 84,  206 => 88,  202 => 87,  199 => 81,  195 => 80,  168 => 61,  157 => 53,  147 => 49,  142 => 47,  137 => 45,  132 => 43,  122 => 39,  117 => 37,  105 => 31,  240 => 105,  231 => 98,  221 => 94,  217 => 93,  213 => 92,  209 => 91,  205 => 90,  201 => 89,  197 => 88,  193 => 87,  189 => 86,  185 => 76,  181 => 75,  177 => 74,  174 => 73,  170 => 72,  123 => 40,  113 => 36,  99 => 29,  96 => 28,  93 => 27,  87 => 25,  84 => 24,  72 => 20,  69 => 19,  66 => 18,  63 => 17,  60 => 16,  165 => 71,  156 => 68,  152 => 51,  146 => 51,  144 => 58,  138 => 63,  134 => 62,  124 => 59,  121 => 38,  115 => 56,  111 => 34,  91 => 37,  89 => 36,  78 => 22,  68 => 24,  57 => 15,  54 => 14,  48 => 12,  45 => 11,  36 => 8,  33 => 7,  30 => 6,  28 => 5,  23 => 3,  19 => 1,  143 => 52,  139 => 51,  135 => 50,  130 => 61,  127 => 41,  120 => 44,  118 => 38,  114 => 41,  112 => 40,  108 => 32,  106 => 32,  102 => 30,  100 => 34,  90 => 26,  85 => 25,  81 => 23,  77 => 21,  75 => 21,  73 => 26,  70 => 18,  67 => 17,  61 => 15,  55 => 12,  51 => 13,  47 => 10,  42 => 10,  39 => 9,  32 => 6,);
    }
}
