<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'archivo_biblioteca_principal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProyUser\\ArchivoBibliotecaBundle\\Controller\\DefaultController::principalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/documentos/',    ),  ),  4 =>   array (  ),),
        'archivo_principal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProyUser\\ArchivoBibliotecaBundle\\Controller\\ArchivoController::principalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/documentos/archivo/',    ),  ),  4 =>   array (  ),),
        'archivo_busqueda' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProyUser\\ArchivoBibliotecaBundle\\Controller\\ArchivoController::busquedaAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/documentos/archivo/busqueda-proyecto',    ),  ),  4 =>   array (  ),),
        'biblioteca_principal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProyUser\\ArchivoBibliotecaBundle\\Controller\\BibliotecaController::principalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/documentos/biblioteca/',    ),  ),  4 =>   array (  ),),
        'biblioteca_busqueda_libros' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProyUser\\ArchivoBibliotecaBundle\\Controller\\BibliotecaController::buscarLibrosAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/documentos/biblioteca/busqueda-libros',    ),  ),  4 =>   array (  ),),
        'biblioteca_busqueda_revistas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProyUser\\ArchivoBibliotecaBundle\\Controller\\BibliotecaController::buscarRevistasAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/documentos/biblioteca/busqueda-revistas',    ),  ),  4 =>   array (  ),),
        'prestamos_principal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProyUser\\ArchivoBibliotecaBundle\\Controller\\PrestamosController::principalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/documentos/prestamos/',    ),  ),  4 =>   array (  ),),
        'prestamos_busqueda_prestamos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProyUser\\ArchivoBibliotecaBundle\\Controller\\PrestamosController::buscarRevistasAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/documentos/prestamos/busqueda-prestamos',    ),  ),  4 =>   array (  ),),
        'reservacion_principal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProyUser\\ReservacionBundle\\Controller\\RecervacionController::principalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reservacion/',    ),  ),  4 =>   array (  ),),
        'rms_marcaciones_principal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProyUser\\RmsMarcacionesBundle\\Controller\\RmsMarcacionesController::principalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rms/',    ),  ),  4 =>   array (  ),),
        'rms_marcaciones_busqueda_mes_anno' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProyUser\\RmsMarcacionesBundle\\Controller\\RmsMarcacionesController::busquedaPorMesAnnoAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rms/busqueda/annomes',    ),  ),  4 =>   array (  ),),
        'autenticacion_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProyUser\\AutenticacionBundle\\Controller\\AutenticacionController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/',    ),  ),  4 =>   array (  ),),
        'autenticacion_login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/login_check',    ),  ),  4 =>   array (  ),),
        'autenticacion_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/logout',    ),  ),  4 =>   array (  ),),
        'autenticacion_delogueo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProyUser\\AutenticacionBundle\\Controller\\AutenticacionController::desloguearAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/desloguear',    ),  ),  4 =>   array (  ),),
        'perfil_principal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProyUser\\UsuarioBundle\\Controller\\PerfilController::principalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/perfil/',    ),  ),  4 =>   array (  ),),
        'directorio_principal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProyUser\\UsuarioBundle\\Controller\\DirectorioController::principalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/directorio/',    ),  ),  4 =>   array (  ),),
        'directorio_busqueda' => array (  0 =>   array (    0 => 'filtros',    1 => 'pag',  ),  1 =>   array (    '_controller' => 'ProyUser\\UsuarioBundle\\Controller\\DirectorioController::buscarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pag',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'filtros',    ),    2 =>     array (      0 => 'text',      1 => '/directorio/buscar',    ),  ),  4 =>   array (  ),),
        'principal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ProyUser\\AutenticacionBundle\\Controller\\AutenticacionController::principalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
