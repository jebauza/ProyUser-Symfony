<?php

/* AutenticacionBundle:Default:login.html.twig */
class __TwigTemplate_c7d98ef02924ef2f2ab9e5eb5a984402685cb8ac1570746e441008aa03cd2607 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>ProyUser</title>
    <meta charset=\"UTF-8\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/autenticacion/css/login.css"), "html", null, true);
        echo "\">

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/UserProject-Logo.png"), "html", null, true);
        echo "\" />

    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/jquery/jquery-1.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/autenticacion/js/login.js"), "html", null, true);
        echo "\"></script>


</head>
<body>

";
        // line 20
        echo "<div class=\"logo-box\">
<h2> <img  src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/UserProject-Logo.png"), "html", null, true);
        echo "\" id=\"logo\"  alt=\"\"/>ProyUser </h2></div>
<div id=\"loginbox\" class=\"\">
    <form id=\"loginform\" class=\"form-vertical\" action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("autenticacion_login");
        echo "\" method=\"post\">



        <div class=\" panel\">
            <div class=\"input-group \">
                <span  class=\"input-group-addon \"><i class=\"glyphicon glyphicon-user\"></i></span>
                <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"Usuario\" required=\"required\" title=\"(Primer nombre)-(CI) Ej: Juan-58021520106\">
            </div>

            <div class=\"input-group \">
                <span class=\"input-group-addon\"><i class=\" glyphicon glyphicon-lock\"></i></span>
                <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Clave\" required=\"required\" title=\"(Numero de 10 digitos de la tarjeta de marcar el reloj) Ej: 0000031052\">
            </div>



            <div class=\"form-actions panel-footer\">
                <span class=\"pull-right\"><input type=\"submit\" name=\"login\" class=\"btn btn-primary btn-primary\" value=\"Entrar\" /></span>
            </div>
        </div>
    </form>

</div>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "AutenticacionBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 23,  60 => 21,  57 => 20,  48 => 13,  44 => 12,  40 => 11,  35 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}
