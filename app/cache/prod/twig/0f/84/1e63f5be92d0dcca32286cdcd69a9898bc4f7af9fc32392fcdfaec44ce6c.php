<?php

/* ::base.html.twig */
class __TwigTemplate_0f841e63f5be92d0dcca32286cdcd69a9898bc4f7af9fc32392fcdfaec44ce6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'activehome' => array($this, 'block_activehome'),
            'activemarcaciones' => array($this, 'block_activemarcaciones'),
            'activedirectorio' => array($this, 'block_activedirectorio'),
            'activealmuerzo' => array($this, 'block_activealmuerzo'),
            'activedoc' => array($this, 'block_activedoc'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/UserProject-Logo.png"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header class=\"navbar navbar-inverse navbar-fixed-top \" role=\"banner\" >
            <div  class=\"container \">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"#\">ProyUser</a>
                </div>
                <nav class=\"navbar-collapse \">
                    <ul class=\"nav navbar-nav\">
                        <li ";
        // line 20
        $this->displayBlock('activehome', $context, $blocks);
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("principal");
        echo "\">Home</a></li>
                        <li ";
        // line 21
        $this->displayBlock('activemarcaciones', $context, $blocks);
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("rms_marcaciones_principal");
        echo "\">Marcaciones</a></li>
                        <li ";
        // line 22
        $this->displayBlock('activedirectorio', $context, $blocks);
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("directorio_principal");
        echo "\">Directorio</a></li>
                        <li ";
        // line 23
        $this->displayBlock('activealmuerzo', $context, $blocks);
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("reservacion_principal");
        echo "\">Almuerzos</a></li>
                        <li ";
        // line 24
        $this->displayBlock('activedoc', $context, $blocks);
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("prestamos_principal");
        echo "\">Documentación</a></li>
                    </ul>
                    <div class=\"nav navbar-nav navbar-right\" >
                        <div  class=\" btn-group\" >
                            <a class=\"user\"  href=\"#\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/usuario/images/directorio/Trabajadores/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "fotoNombre"))), "html", null, true);
        echo "\" class=\"img-circle\">";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nombre")), "html", null, true);
        echo "</a>
                            <a class=\" user  dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("perfil_principal");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span>Mi perfil</a></li>
                                <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("autenticacion_delogueo");
        echo "\"><span class=\"glyphicon glyphicon-off\"></span> Salir</a></li>

                            </ul>
                        </div>
                    </div>
                </nav>
                </div>
        </header>

        ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "    </body>
</html>







";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "ProyUser";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/principal.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 20
    public function block_activehome($context, array $blocks = array())
    {
    }

    // line 21
    public function block_activemarcaciones($context, array $blocks = array())
    {
    }

    // line 22
    public function block_activedirectorio($context, array $blocks = array())
    {
    }

    // line 23
    public function block_activealmuerzo($context, array $blocks = array())
    {
    }

    // line 24
    public function block_activedoc($context, array $blocks = array())
    {
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        // line 42
        echo "
        ";
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        // line 45
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/jquery/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 46,  185 => 45,  182 => 44,  177 => 42,  174 => 41,  169 => 24,  164 => 23,  159 => 22,  154 => 21,  149 => 20,  143 => 8,  138 => 7,  135 => 6,  129 => 5,  116 => 48,  113 => 44,  111 => 41,  99 => 32,  95 => 31,  87 => 28,  78 => 24,  72 => 23,  66 => 22,  60 => 21,  54 => 20,  40 => 10,  38 => 6,  34 => 5,  28 => 1,);
    }
}
