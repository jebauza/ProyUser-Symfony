<?php

/* UsuarioBundle:Perfil:perfil.html.twig */
class __TwigTemplate_44295e32924394e124a862311c8f41c34a4d9286b403bd4acdb3abc71e86c5fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo "-Mi Perfil";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/usuario/css/perfil/perfil.css"), "html", null, true);
        echo "\">
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"bs-docs-section container\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"panel col-xs-12\">
                <div class=\"panel-heading \">Datos presonales</div>
                <div class=\"foto-perfil col-xs-2\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/usuario/images/directorio/Trabajadores/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "fotoNombre"))), "html", null, true);
        echo "\" class=\"img thumbnail\"></div>
                <table class=\"col-xs-9\">
                    <thead>
                    <th></th>
                    <th></th>
                    <th></th>
                    </thead>
                    <tr>
                        <td><strong>Nombre:</strong> ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nombre"), "html", null, true);
        echo "</td>
                        <td><strong>Telefono Particular:</strong> ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "telefono"), "html", null, true);
        echo "</td >
                    </tr>
                    <tr>
                        <td><strong>C. Identidad:</strong> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "cIdentida"), "html", null, true);
        echo "</td>
                        <td><strong>Fecha de Nacimiento:</strong>  ";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "fechaNaci"), "d/m/Y"), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td><strong>Municipio:</strong> ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "municipio"), "html", null, true);
        echo "</td>
                        <td><strong>Escolaridad:</strong> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "escolarida"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td><strong>Direccion Particular:</strong> ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "direccion"), "html", null, true);
        echo "</td>
                        <td><strong>Edad:</strong> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "edad"), "html", null, true);
        echo " años</td>
                    </tr>
                    <tr>
                        <td><strong>Especialidad:</strong> ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "especialida"), "html", null, true);
        echo "</td>
                        <td><strong>Estado Civil:</strong> ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "estadoCivil"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td><strong>Lugar de Nacimiento:</strong> ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "lugarNacimiento"), "html", null, true);
        echo "</td>
                        <td><strong>Cantidad de Hijos:</strong> ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "noHijos"), "html", null, true);
        echo "</td>
                    </tr>

                </table>
            </div>
            <div class=\"panel col-xs-12\">
                <div class=\"panel-heading \">Datos empresariales</div>
                <table class=\"col-xs-12\">
                    <thead>
                    <th></th>
                    <th></th>
                    <th></th>
                    </thead>
                    <tr>
                        <td><strong>No.Tarjeta:</strong> ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "noTarjeta"), "html", null, true);
        echo "</td>
                        <td><strong>Area:</strong> ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "area"), "html", null, true);
        echo "</td >
                        <td><strong>Correo:</strong> ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "correo"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td><strong>Tarjeta RMS:</strong> ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "tarjetaReloj"), "html", null, true);
        echo "</td>
                        <td><strong>Area Cod:</strong> ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "areaNum"), "html", null, true);
        echo "</td>
                        <td><strong>Piso:</strong> ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "piso"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td><strong>Categoria:</strong> ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "categOcupada"), "html", null, true);
        echo "</td>
                        <td><strong>Departamento:</strong> ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "departamento"), "html", null, true);
        echo "</td>
                        <td><strong>Cubiculo:</strong> ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "cubiculo"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td><strong>Salario:</strong> ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "salario"), "html", null, true);
        echo " MN</td>
                        <td><strong>Dpto. Cod:</strong> ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "codigoDpto"), "html", null, true);
        echo "</td>
                        <td><strong>Telefono Oficina:</strong> ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "telefonoOficina"), "html", null, true);
        echo "</td>
                    </tr>
                    ";
        // line 79
        $context["horario"] = "7.30am-5.00pm";
        // line 80
        echo "                    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "horaEntradSalid")) != 0)) {
            // line 81
            echo "                        ";
            $context["horario"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "horaEntradSalid");
            // line 82
            echo "                    ";
        }
        // line 83
        echo "                    <tr>
                        <td><strong>Fecha Inicio:</strong> ";
        // line 84
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "fechaAlta"), "d/m/Y"), "html", null, true);
        echo "</td>
                        <td><strong>Cargo:</strong> ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "cargoActual"), "html", null, true);
        echo "</td>
                        <td><strong>Horario Laboral:</strong> ";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), "html", null, true);
        echo "</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
";
    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        // line 95
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Perfil:perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 95,  233 => 94,  222 => 86,  218 => 85,  214 => 84,  211 => 83,  208 => 82,  205 => 81,  202 => 80,  200 => 79,  195 => 77,  191 => 76,  187 => 75,  181 => 72,  177 => 71,  173 => 70,  167 => 67,  163 => 66,  159 => 65,  153 => 62,  149 => 61,  145 => 60,  128 => 46,  124 => 45,  118 => 42,  114 => 41,  108 => 38,  104 => 37,  98 => 34,  94 => 33,  87 => 29,  83 => 28,  77 => 25,  73 => 24,  62 => 16,  55 => 11,  52 => 10,  46 => 7,  41 => 6,  38 => 5,  31 => 3,);
    }
}
