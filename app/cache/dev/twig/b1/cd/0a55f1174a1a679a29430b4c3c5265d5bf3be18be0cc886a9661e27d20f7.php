<?php

/* ArchivoBibliotecaBundle:Biblioteca:revista.html.twig */
class __TwigTemplate_b1cd0a55f1174a1a679a29430b4c3c5265d5bf3be18be0cc886a9661e27d20f7 extends Twig_Template
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
        echo "<div class=\"col-xs-12 \">
    <div >
        <form id=\"bucsar-revista\" class=\"form-inline\" method=\"post\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("biblioteca_busqueda_revistas");
        echo "\">
            <fieldset>
                ";
        // line 5
        list($context["titulo"], $context["mes"], $context["anno"], $context["editorial"], $context["frecuencia"], $context["institucion"], $context["nacion"], $context["idioma"], $context["categoria"]) =         array("", "", "", "", "", "", "", "", "");
        // line 6
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposRevista"]) ? $context["arrCamposRevista"] : null), "titulo", array(), "any", true, true)) {
            // line 7
            echo "                    ";
            $context["titulo"] = $this->getAttribute((isset($context["arrCampos"]) ? $context["arrCampos"] : $this->getContext($context, "arrCampos")), "titulo");
            // line 8
            echo "                ";
        }
        // line 9
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposRevista"]) ? $context["arrCamposRevista"] : null), "mes", array(), "any", true, true)) {
            // line 10
            echo "                    ";
            $context["mes"] = $this->getAttribute((isset($context["arrCamposRevista"]) ? $context["arrCamposRevista"] : $this->getContext($context, "arrCamposRevista")), "mes");
            // line 11
            echo "                ";
        }
        // line 12
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposRevista"]) ? $context["arrCamposRevista"] : null), "anno", array(), "any", true, true)) {
            // line 13
            echo "                    ";
            $context["anno"] = $this->getAttribute((isset($context["arrCamposRevista"]) ? $context["arrCamposRevista"] : $this->getContext($context, "arrCamposRevista")), "anno");
            // line 14
            echo "                ";
        }
        // line 15
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposRevista"]) ? $context["arrCamposRevista"] : null), "editorial", array(), "any", true, true)) {
            // line 16
            echo "                    ";
            $context["editorial"] = $this->getAttribute((isset($context["arrCamposRevista"]) ? $context["arrCamposRevista"] : $this->getContext($context, "arrCamposRevista")), "editorial");
            // line 17
            echo "                ";
        }
        // line 18
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposRevista"]) ? $context["arrCamposRevista"] : null), "frecuencia", array(), "any", true, true)) {
            // line 19
            echo "                    ";
            $context["frecuencia"] = $this->getAttribute((isset($context["arrCamposRevista"]) ? $context["arrCamposRevista"] : $this->getContext($context, "arrCamposRevista")), "frecuencia");
            // line 20
            echo "                ";
        }
        // line 21
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposRevista"]) ? $context["arrCamposRevista"] : null), "institucion", array(), "any", true, true)) {
            // line 22
            echo "                    ";
            $context["institucion"] = $this->getAttribute((isset($context["arrCamposRevista"]) ? $context["arrCamposRevista"] : $this->getContext($context, "arrCamposRevista")), "institucion");
            // line 23
            echo "                ";
        }
        // line 24
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposRevista"]) ? $context["arrCamposRevista"] : null), "nacion", array(), "any", true, true)) {
            // line 25
            echo "                    ";
            $context["nacion"] = $this->getAttribute((isset($context["arrCamposRevista"]) ? $context["arrCamposRevista"] : $this->getContext($context, "arrCamposRevista")), "nacion");
            // line 26
            echo "                ";
        }
        // line 27
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposRevista"]) ? $context["arrCamposRevista"] : null), "idioma", array(), "any", true, true)) {
            // line 28
            echo "                    ";
            $context["idioma"] = $this->getAttribute((isset($context["arrCamposRevista"]) ? $context["arrCamposRevista"] : $this->getContext($context, "arrCamposRevista")), "idioma");
            // line 29
            echo "                ";
        }
        // line 30
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposRevista"]) ? $context["arrCamposRevista"] : null), "categoria", array(), "any", true, true)) {
            // line 31
            echo "                    ";
            $context["categoria"] = $this->getAttribute((isset($context["arrCamposRevista"]) ? $context["arrCamposRevista"] : $this->getContext($context, "arrCamposRevista")), "categoria");
            // line 32
            echo "                ";
        }
        // line 33
        echo "


                <label for=\"titulo\">Titulo:</label>
                <input type=\"text\"  class=\"form-control input-sm\" id=\"titulo\" name=\"_titulo\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : $this->getContext($context, "titulo")), "html", null, true);
        echo "\"/>
                <label for=\"titulo\">Mes:</label>
                <input type=\"text\"  class=\"form-control input-sm\" id=\"mes\" name=\"_mes\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["mes"]) ? $context["mes"] : $this->getContext($context, "mes")), "html", null, true);
        echo "\"/>
                <label for=\"titulo\">Año:</label>
                <input type=\"text\"  class=\"form-control input-sm\" id=\"anno\" name=\"_anno\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["anno"]) ? $context["anno"] : $this->getContext($context, "anno")), "html", null, true);
        echo "\"/>
                <label for=\"titulo\">Editorial:</label>
                <input type=\"text\"  class=\"form-control input-sm\" id=\"editorial\" name=\"_editorial\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["editorial"]) ? $context["editorial"] : $this->getContext($context, "editorial")), "html", null, true);
        echo "\"/>
                <label for=\"titulo\">Frecuencia:</label>
                <input type=\"text\"  class=\"form-control input-sm\" id=\"frecuencia\" name=\"_frecuencia\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["frecuencia"]) ? $context["frecuencia"] : $this->getContext($context, "frecuencia")), "html", null, true);
        echo "\"/>
                <label for=\"titulo\">Institución:</label>
                <input type=\"text\"  class=\"form-control input-sm\" id=\"institucion\" name=\"_institucion\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["institucion"]) ? $context["institucion"] : $this->getContext($context, "institucion")), "html", null, true);
        echo "\"/>
                <label for=\"titulo\">Nacion:</label>
                <input type=\"text\"  class=\"form-control input-sm\" id=\"nacion\" name=\"_nacion\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["nacion"]) ? $context["nacion"] : $this->getContext($context, "nacion")), "html", null, true);
        echo "\"/>
                <label for=\"titulo\">Idioma:</label>
                <input type=\"text\"  class=\"form-control input-sm\" id=\"idioma\" name=\"_idioma\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["idioma"]) ? $context["idioma"] : $this->getContext($context, "idioma")), "html", null, true);
        echo "\"/>
                <label for=\"titulo\">Categoria:</label>
                <input type=\"text\"  class=\"form-control input-sm\" id=\"categoria\" name=\"_categoria\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "html", null, true);
        echo "\"/>
                <button type=\"submit\" class=\"btn btn-default pull-right\"><span class=\"glyphicon glyphicon-search\"></span>Buscar</button>
            </fieldset>

        </form>
    </div>
</div>

";
        // line 61
        if (array_key_exists("arrRevistas", $context)) {
            // line 62
            echo "<div class=\"col-xs-12 contenido\">
    <div class=\"table-responsive\" data-pattern=\"priority-columns\" >
        <table id=\"\" class=\"table table-small-font  example\">
            <thead>
            <tr>
                <th>Documento</th>
                <th>Mes</th>
                <th >Categoria</th>

                <th>Anno</th>

                <th >Tema</th>
                <th data-priority=\"1\">Idioma y Nación</th>
                <th >Frecuencia</th>
                <th data-priority=\"1\">Conservacion</th>
                <th>Estante</th>
                <th>Nivel</th>


            </tr>
            </thead>
            <tbody>

    ";
            // line 85
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arrRevistas"]) ? $context["arrRevistas"] : $this->getContext($context, "arrRevistas")));
            foreach ($context['_seq'] as $context["_key"] => $context["revista"]) {
                // line 86
                echo "            <tr>
                <td >";
                // line 87
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["revista"]) ? $context["revista"] : $this->getContext($context, "revista")), "titulo")), "html", null, true);
                echo "</td>
                <td >";
                // line 88
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["revista"]) ? $context["revista"] : $this->getContext($context, "revista")), "mes_otro")), "html", null, true);
                echo "</td>
                <td>";
                // line 89
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["revista"]) ? $context["revista"] : $this->getContext($context, "revista")), "categoria")), "html", null, true);
                echo "</td>

                <td>";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revista"]) ? $context["revista"] : $this->getContext($context, "revista")), "anno"), "html", null, true);
                echo "</td>

                <td data-priority=\"1\">";
                // line 93
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["revista"]) ? $context["revista"] : $this->getContext($context, "revista")), "tema")), "html", null, true);
                echo "</td>
                <td data-priority=\"1\">";
                // line 94
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["revista"]) ? $context["revista"] : $this->getContext($context, "revista")), "idioma")), "html", null, true);
                echo " -> ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["revista"]) ? $context["revista"] : $this->getContext($context, "revista")), "nacion")), "html", null, true);
                echo "</td>
                <td >";
                // line 95
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["revista"]) ? $context["revista"] : $this->getContext($context, "revista")), "frecuencia")), "html", null, true);
                echo "</td>
                <td data-priority=\"1\">";
                // line 96
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["revista"]) ? $context["revista"] : $this->getContext($context, "revista")), "conservacion")), "html", null, true);
                echo "</td>
                <td>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revista"]) ? $context["revista"] : $this->getContext($context, "revista")), "estante"), "html", null, true);
                echo "</td>
                <td>";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revista"]) ? $context["revista"] : $this->getContext($context, "revista")), "nivel"), "html", null, true);
                echo "</td>
            </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revista'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "
            </tbody>
        </table>
    </div>
</div>
";
        }
        // line 107
        echo "








";
    }

    public function getTemplateName()
    {
        return "ArchivoBibliotecaBundle:Biblioteca:revista.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 107,  251 => 101,  242 => 98,  238 => 97,  234 => 96,  230 => 95,  224 => 94,  220 => 93,  215 => 91,  210 => 89,  206 => 88,  202 => 87,  199 => 86,  195 => 85,  170 => 62,  168 => 61,  157 => 53,  152 => 51,  147 => 49,  142 => 47,  137 => 45,  132 => 43,  127 => 41,  122 => 39,  117 => 37,  111 => 33,  108 => 32,  105 => 31,  102 => 30,  99 => 29,  96 => 28,  93 => 27,  90 => 26,  87 => 25,  84 => 24,  81 => 23,  78 => 22,  75 => 21,  72 => 20,  69 => 19,  66 => 18,  63 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  36 => 8,  33 => 7,  30 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
