<?php

/* ArchivoBibliotecaBundle:Documentos:documentos.html.twig */
class __TwigTemplate_ecfaf2bc2ea2a6c9e0a5cb2f1ff75c0a8ae5d8bbe5ee738e8bff93a47886aafb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'activedoc' => array($this, 'block_activedoc'),
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

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo "-Archivo y Biblioteca";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/archivobiblioteca/css/servicios.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/dataTables/media/css/jquery.dataTables.css"), "html", null, true);
        echo "\">
  <!--  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/rwd/docs/css/rwd-table.min.css"), "html", null, true);
        echo "\">-->
";
    }

    // line 15
    public function block_activedoc($context, array $blocks = array())
    {
        echo "class=\"active\"";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "
";
        // line 19
        $context["mostrarAlertas"] = "";
        // line 20
        if (((isset($context["cantAlertas"]) ? $context["cantAlertas"] : $this->getContext($context, "cantAlertas")) > 0)) {
            // line 21
            echo "    ";
            $context["mostrarAlertas"] = (isset($context["cantAlertas"]) ? $context["cantAlertas"] : $this->getContext($context, "cantAlertas"));
        }
        // line 23
        echo "<div class=\"bs-docs-section container\">
    <div class=\"row\">
        <input type=\"hidden\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["activo"]) ? $context["activo"] : $this->getContext($context, "activo")), "html", null, true);
        echo "\" id=\"li-activo\"/>
        <ul class=\"nav nav-tabs\" id=\"menu-horizontal\">
            <li id=\"general\"><a href=\"#\">Prestamos <span class=\"badge\" style=\"background-color: #c12e2a\">";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["mostrarAlertas"]) ? $context["mostrarAlertas"] : $this->getContext($context, "mostrarAlertas")), "html", null, true);
        echo "</span></a></li>
            <li id=\"revista\"><a href=\"#\">Revista</a></li>
            <li id=\"libro\"><a href=\"#\">Libro</a></li>
            <li id=\"proyecto\"><a href=\"#\">Proyecto</a></li>
        </ul>
        <div class=\"tab-cuerpo\">
            <div id=\"tab-general\">
                ";
        // line 34
        $this->env->loadTemplate("ArchivoBibliotecaBundle:Documentos:general.html.twig")->display($context);
        // line 35
        echo "            </div>
            <div id=\"tab-proyecto\">
                ";
        // line 37
        $this->env->loadTemplate("ArchivoBibliotecaBundle:Archivo:archivo.html.twig")->display($context);
        // line 38
        echo "            </div>
            <div id=\"tab-revista\">
                ";
        // line 40
        $this->env->loadTemplate("ArchivoBibliotecaBundle:Biblioteca:revista.html.twig")->display($context);
        // line 41
        echo "            </div>
            <div id=\"tab-libro\">
                ";
        // line 43
        $this->env->loadTemplate("ArchivoBibliotecaBundle:Biblioteca:libro.html.twig")->display($context);
        // line 44
        echo "            </div>
        </div>
    </div>
";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/archivobiblioteca/js/servicios.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/dataTables/media/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
  <!--  <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/rwd/docs/js/rwd-table.js"), "html", null, true);
        echo "\"></script>-->
";
    }

    public function getTemplateName()
    {
        return "ArchivoBibliotecaBundle:Documentos:documentos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 52,  139 => 51,  135 => 50,  130 => 49,  127 => 48,  120 => 44,  118 => 43,  114 => 41,  112 => 40,  108 => 38,  106 => 37,  102 => 35,  100 => 34,  90 => 27,  85 => 25,  81 => 23,  77 => 21,  75 => 20,  73 => 19,  70 => 18,  67 => 17,  61 => 15,  55 => 12,  51 => 11,  47 => 10,  42 => 9,  39 => 8,  32 => 6,);
    }
}
