<?php

/* ReservacionBundle:Default:carta_almuezo.html.twig */
class __TwigTemplate_ab96442523b9be32f00a0c5a996bdd7768a5d961afe5dacdbdc85b4152bc7430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'activealmuerzo' => array($this, 'block_activealmuerzo'),
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
        echo "-Almuerzo";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/reservacion/css/almuerzo.css"), "html", null, true);
        echo "\">
";
    }

    // line 11
    public function block_activealmuerzo($context, array $blocks = array())
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
            <div class=\"col-lg-3 col-sm-3 col-xs-12 reservados\">
                <div class=\"panel\">
                    <div class=\"panel-heading\">Reservaciones</div>
                    <div>
                        <form  name=\"confirmar\" action=\"\" class=\"form-horizontal\" >
                            <input type=\"hidden\" id=\"almuerzos\"/>
                            <div id=\"platos\">
                            </div>
                            <p >Importe: <em id=\"importe\"></em></p>
                            <a href=\"#\"  class=\"reservar btn btn-primary\">Confirmar</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-9 col-lg-9\">
                <div class=\"col-lg-4 col-sm-4\">
                    <div class=\"thumbnail\">
                        <img  src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/reservacion/images/platos/Pollo frito.jpg"), "html", null, true);
        echo "\" class=\"thumbnail\" alt=\"\"/>
                        <div class=\"caption\">
                            <h4>\$ 15 Arroz con pollo frito<a href=\"#\" class=\"plus\"><span class=\"glyphicon glyphicon-plus pull-right\"></span></a></h4>
                            <fieldset id=\"plato-1\" class=\"hidden\">
                                <p >El Arroz con pollo sus ingredientes principales son el pollo frito y el arroz, con ensalada de verduras.</p>
                                <div class=\"form-group\">
                                    <label for=\"cant1\">Cantidad a reservar</label>
                                    <input type=\"number\"  id=\"cant1\" class=\"form-control \" />
                                    <input type=\"hidden\" value=\"Arroz con pollo/15\" id=\"costo1\"/>
                                </div>
                                <a href=\"#\"  class=\"reservar btn btn-primary\">Reservar</a>
                                <a href=\"#\"  class=\"cancelar btn btn-danger\">Cancelar</a>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-4\">
                    <div class=\"thumbnail\">
                        <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/reservacion/images/platos/Arroz con hamburguesa.jpg"), "html", null, true);
        echo "\" class=\"thumbnail\" alt=\"\"/>
                        <div class=\"caption\">
                            <h4>\$15 Arroz con hamburguesa<a href=\"#\" class=\"plus\"><span class=\"  glyphicon glyphicon-plus pull-right\"></span></a></h4>
                            <fieldset id=\"plato-2\" class=\"hidden\">
                                <p >Arroz con hamburguesa de cerdo bien frita</p>
                                <div class=\"form-group\">
                                    <label for=\"cant2\">Cantidad a reservar</label>
                                    <input type=\"number\"  id=\"cant2\" class=\"form-control \" />
                                    <input type=\"hidden\" value=\"Arroz con pollo/25\" id=\"costo2\"/>
                                </div>
                                <a href=\"#\"  class=\"reservar btn btn-primary\">Reservar</a>
                                <a href=\"#\"  class=\"cancelar btn btn-danger\">Cancelar</a>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-4\">
                    <div class=\"thumbnail\">
                        <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/reservacion/images/platos/spaghetti.jpg"), "html", null, true);
        echo "\" class=\"thumbnail\" alt=\"\"/>
                        <div class=\"caption\">
                            <h4>\$15 Spaghetti napolitanos<a href=\"#\" class=\"plus\"><span class=\"  glyphicon glyphicon-plus pull-right\"></span></a></h4>
                            <fieldset id=\"plato-3\"  class=\"hidden\">
                                <p >Tomate entero pelado, un pimiento verde, dos cebollas blancas medianas, azúcar, sal, aceite, una guindilla y dos dientes de ajo.</p>
                                <div class=\"form-group\">
                                    <label  for=\"cant3\">Cantidad a reservar</label>
                                    <input type=\"number\" id=\"cant3\" class=\"form-control \" />
                                    <input type=\"hidden\" value=\"Ropa vieja/25\" id=\"costo3\"/>
                                </div>
                                <a href=\"#\"  class=\"reservar btn btn-primary\">Reservar</a>
                                <a href=\"#\"  class=\"cancelar btn btn-danger\">Cancelar</a>
                            </fieldset>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

";
    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        // line 93
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/reservacion/js/almuerzo.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "ReservacionBundle:Default:carta_almuezo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 94,  155 => 93,  152 => 92,  126 => 69,  105 => 51,  84 => 33,  62 => 13,  59 => 12,  53 => 11,  47 => 7,  42 => 6,  39 => 5,  32 => 3,);
    }
}
