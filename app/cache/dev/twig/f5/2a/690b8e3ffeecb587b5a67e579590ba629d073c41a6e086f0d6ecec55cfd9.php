<?php

/* ArchivoBibliotecaBundle:Archivo:archivo.html.twig */
class __TwigTemplate_f52a690b8e3ffeecb587b5a67e579590ba629d073c41a6e086f0d6ecec55cfd9 extends Twig_Template
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
        echo "<div class=\"col-xs-12 a\" >
    <div>
        <form id=\"bucsar-archivo\" class=\"form-inline\" method=\"post\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("archivo_busqueda");
        echo "\">
            <fieldset>
                ";
        // line 5
        list($context["nombreActual"], $context["nombre"], $context["proyectista"], $context["anno"], $context["programa"], $context["especialidad"], $context["etapa"], $context["sistContructivo"]) =         array("", "", "", "", "", "", "", "");
        // line 6
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposProyecto"]) ? $context["arrCamposProyecto"] : null), "nombre_actual", array(), "any", true, true)) {
            // line 7
            echo "                    ";
            $context["nombreActual"] = $this->getAttribute((isset($context["arrCamposProyecto"]) ? $context["arrCamposProyecto"] : $this->getContext($context, "arrCamposProyecto")), "nombre_actual");
            // line 8
            echo "                ";
        }
        // line 9
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposProyecto"]) ? $context["arrCamposProyecto"] : null), "nombre", array(), "any", true, true)) {
            // line 10
            echo "                    ";
            $context["nombre"] = $this->getAttribute((isset($context["arrCamposProyecto"]) ? $context["arrCamposProyecto"] : $this->getContext($context, "arrCamposProyecto")), "nombre");
            // line 11
            echo "                ";
        }
        // line 12
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposProyecto"]) ? $context["arrCamposProyecto"] : null), "proyectista", array(), "any", true, true)) {
            // line 13
            echo "                    ";
            $context["proyectista"] = $this->getAttribute((isset($context["arrCamposProyecto"]) ? $context["arrCamposProyecto"] : $this->getContext($context, "arrCamposProyecto")), "proyectista");
            // line 14
            echo "                ";
        }
        // line 15
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposProyecto"]) ? $context["arrCamposProyecto"] : null), "anno", array(), "any", true, true)) {
            // line 16
            echo "                    ";
            $context["anno"] = $this->getAttribute((isset($context["arrCamposProyecto"]) ? $context["arrCamposProyecto"] : $this->getContext($context, "arrCamposProyecto")), "anno");
            // line 17
            echo "                ";
        }
        // line 18
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposProyecto"]) ? $context["arrCamposProyecto"] : null), "programa", array(), "any", true, true)) {
            // line 19
            echo "                    ";
            $context["programa"] = $this->getAttribute((isset($context["arrCamposProyecto"]) ? $context["arrCamposProyecto"] : $this->getContext($context, "arrCamposProyecto")), "programa");
            // line 20
            echo "                ";
        }
        // line 21
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposProyecto"]) ? $context["arrCamposProyecto"] : null), "especialidad", array(), "any", true, true)) {
            // line 22
            echo "                    ";
            $context["especialidad"] = $this->getAttribute((isset($context["arrCamposProyecto"]) ? $context["arrCamposProyecto"] : $this->getContext($context, "arrCamposProyecto")), "especialidad");
            // line 23
            echo "                ";
        }
        // line 24
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposProyecto"]) ? $context["arrCamposProyecto"] : null), "etapa", array(), "any", true, true)) {
            // line 25
            echo "                    ";
            $context["etapa"] = $this->getAttribute((isset($context["arrCamposProyecto"]) ? $context["arrCamposProyecto"] : $this->getContext($context, "arrCamposProyecto")), "etapa");
            // line 26
            echo "                ";
        }
        // line 27
        echo "                ";
        if ($this->getAttribute((isset($context["arrCamposProyecto"]) ? $context["arrCamposProyecto"] : null), "sistema_const", array(), "any", true, true)) {
            // line 28
            echo "                    ";
            $context["sistContructivo"] = $this->getAttribute((isset($context["arrCamposProyecto"]) ? $context["arrCamposProyecto"] : $this->getContext($context, "arrCamposProyecto")), "sistema_const");
            // line 29
            echo "                ";
        }
        // line 30
        echo "


            <label for=\"titulo\">Nomb. Actual:</label>
            <input type=\"text\"  class=\"form-control input-sm\" id=\"nombre_actual\" name=\"_nombre_actual value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["nombreActual"]) ? $context["nombreActual"] : $this->getContext($context, "nombreActual")), "html", null, true);
        echo "\" />
            <label for=\"titulo\">Nombre:</label>
            <input type=\"text\"  class=\"form-control input-sm\" id=\"nombre\" name=\"_nombre\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo "\"/>
            <label for=\"titulo\">Proyectista:</label>
            <input type=\"text\"  class=\"form-control input-sm\" id=\"proyectista\" name=\"_proyectista\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["proyectista"]) ? $context["proyectista"] : $this->getContext($context, "proyectista")), "html", null, true);
        echo "\"/>
            <label for=\"titulo\">Año:</label>
            <input type=\"text\"  class=\"form-control input-sm\" id=\"anno\" name=\"_anno\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["anno"]) ? $context["anno"] : $this->getContext($context, "anno")), "html", null, true);
        echo "\"/>
            <label for=\"titulo\">Programa:</label>
            <input type=\"text\"  class=\"form-control input-sm\" id=\"programa\" name=\"_programa\" />

            <label for=\"titulo\">Especialidad:</label>
            <input type=\"text\"  class=\"form-control input-sm\" id=\"especialidad\" name=\"_especialidad\"/>
            <label for=\"titulo\">Etapa:</label>
            <input type=\"text\"  class=\"form-control input-sm\" id=\"etapa\" name=\"_etapa\"/>
                <label for=\"titulo\">Sist. Constructivo:</label>
                <input type=\"text\"  class=\"form-control input-sm\" id=\"sistema_const\" name=\"_sistema_const\"/>
         <!--   <label for=\"titulo\">Observación:</label>
            <input type=\"text\"  class=\"form-control input-sm\" id=\"observacion\" name=\"_observacion\"/>!-->
            <button type=\"submit\" class=\"btn btn-default pull-right\"><span class=\"glyphicon glyphicon-search\"></span>Buscar</button>
            </fieldset>
        </form>
    </div>
</div>

";
        // line 58
        if (array_key_exists("arrProyectos", $context)) {
            // line 59
            echo "<div class=\"col-xs-12 contenido\" >
    <div class=\"table-responsive\" data-pattern=\"priority-columns\" >
        <table  class=\"table table-small-font table-striped  example\">
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
            // line 81
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arrProyectos"]) ? $context["arrProyectos"] : $this->getContext($context, "arrProyectos")));
            foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
                // line 82
                echo "            <tr>
                <td >";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "nombre"), "html", null, true);
                echo "</td>
                <td data-priority=\"1\">";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "nombre_actual"), "html", null, true);
                echo "</td>
                <td>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "nombre_proyectista"), "html", null, true);
                echo "</td>
                <td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "anno_proyecto"), "html", null, true);
                echo "</td>
                <td data-priority=\"1\">";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "programa"), "html", null, true);
                echo "</td>
                <td data-priority=\"1\">";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "sistema_construccion"), "html", null, true);
                echo "</td>
                <td data-priority=\"1\">";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "especialidad"), "html", null, true);
                echo "</td>
                <td data-priority=\"1\">";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "etapa"), "html", null, true);
                echo "</td>
                <td data-priority=\"1\">";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "observacion"), "html", null, true);
                echo "</td>
                <td>";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "cubiculo"), "html", null, true);
                echo "</td>
                <td>";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "estante"), "html", null, true);
                echo "</td>
                <td>";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "casilla"), "html", null, true);
                echo "</td>
            </tr>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "

            </tbody>
    </table>
    </div>
</div>
";
        }
        // line 105
        echo "
";
    }

    public function getTemplateName()
    {
        return "ArchivoBibliotecaBundle:Archivo:archivo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 105,  231 => 98,  221 => 94,  217 => 93,  213 => 92,  209 => 91,  205 => 90,  201 => 89,  197 => 88,  193 => 87,  189 => 86,  185 => 85,  181 => 84,  177 => 83,  174 => 82,  170 => 81,  146 => 59,  144 => 58,  123 => 40,  118 => 38,  113 => 36,  108 => 34,  102 => 30,  99 => 29,  96 => 28,  93 => 27,  90 => 26,  87 => 25,  84 => 24,  81 => 23,  78 => 22,  75 => 21,  72 => 20,  69 => 19,  66 => 18,  63 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  36 => 8,  33 => 7,  30 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
