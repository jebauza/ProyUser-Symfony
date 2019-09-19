<?php

/* ArchivoBibliotecaBundle:Default:prestamos.html.twig */
class __TwigTemplate_c7397bfa22ccfa3831e7236864ec03efe69657d58f8f8e7ad6eb1c7d5099d04b extends Twig_Template
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
    <div class=\"table-responsive\" data-pattern=\"priority-columns\" >
        <table id=\"\" class=\"table table-small-font table-striped example\">
            <thead>
            <tr>
                <th >Tipo</th>
                <th >Titulo</th>
                <th>Fecha prestamo</th>
                <th>Fecha devolucion</th>
                <th>Dias transcurridos</th>
                <th>Observacion</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td >LIBRO</td>
                <td >TRATADO PRACTICO DE CUBIERTAS</td>
                <td >2012/10/09</td>
                <td >2012/10/24</td>
                <td>0</td>
                <td>SIN INVENTARIO</td>
            </tr>
            </tbody>
        </table>
    </div>


</div>
";
    }

    public function getTemplateName()
    {
        return "ArchivoBibliotecaBundle:Default:prestamos.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
