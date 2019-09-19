<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/documentos')) {
            // archivo_biblioteca_principal
            if (rtrim($pathinfo, '/') === '/documentos') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'archivo_biblioteca_principal');
                }

                return array (  '_controller' => 'ProyUser\\ArchivoBibliotecaBundle\\Controller\\DefaultController::principalAction',  '_route' => 'archivo_biblioteca_principal',);
            }

            if (0 === strpos($pathinfo, '/documentos/archivo')) {
                // archivo_principal
                if (rtrim($pathinfo, '/') === '/documentos/archivo') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'archivo_principal');
                    }

                    return array (  '_controller' => 'ProyUser\\ArchivoBibliotecaBundle\\Controller\\ArchivoController::principalAction',  '_route' => 'archivo_principal',);
                }

                // archivo_busqueda
                if ($pathinfo === '/documentos/archivo/busqueda-proyecto') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_archivo_busqueda;
                    }

                    return array (  '_controller' => 'ProyUser\\ArchivoBibliotecaBundle\\Controller\\ArchivoController::busquedaAction',  '_route' => 'archivo_busqueda',);
                }
                not_archivo_busqueda:

            }

            if (0 === strpos($pathinfo, '/documentos/biblioteca')) {
                // biblioteca_principal
                if (rtrim($pathinfo, '/') === '/documentos/biblioteca') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'biblioteca_principal');
                    }

                    return array (  '_controller' => 'ProyUser\\ArchivoBibliotecaBundle\\Controller\\BibliotecaController::principalAction',  '_route' => 'biblioteca_principal',);
                }

                if (0 === strpos($pathinfo, '/documentos/biblioteca/busqueda-')) {
                    // biblioteca_busqueda_libros
                    if ($pathinfo === '/documentos/biblioteca/busqueda-libros') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_biblioteca_busqueda_libros;
                        }

                        return array (  '_controller' => 'ProyUser\\ArchivoBibliotecaBundle\\Controller\\BibliotecaController::buscarLibrosAction',  '_route' => 'biblioteca_busqueda_libros',);
                    }
                    not_biblioteca_busqueda_libros:

                    // biblioteca_busqueda_revistas
                    if ($pathinfo === '/documentos/biblioteca/busqueda-revistas') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_biblioteca_busqueda_revistas;
                        }

                        return array (  '_controller' => 'ProyUser\\ArchivoBibliotecaBundle\\Controller\\BibliotecaController::buscarRevistasAction',  '_route' => 'biblioteca_busqueda_revistas',);
                    }
                    not_biblioteca_busqueda_revistas:

                }

            }

            if (0 === strpos($pathinfo, '/documentos/prestamos')) {
                // prestamos_principal
                if (rtrim($pathinfo, '/') === '/documentos/prestamos') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'prestamos_principal');
                    }

                    return array (  '_controller' => 'ProyUser\\ArchivoBibliotecaBundle\\Controller\\PrestamosController::principalAction',  '_route' => 'prestamos_principal',);
                }

                // prestamos_busqueda_prestamos
                if ($pathinfo === '/documentos/prestamos/busqueda-prestamos') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_prestamos_busqueda_prestamos;
                    }

                    return array (  '_controller' => 'ProyUser\\ArchivoBibliotecaBundle\\Controller\\PrestamosController::buscarRevistasAction',  '_route' => 'prestamos_busqueda_prestamos',);
                }
                not_prestamos_busqueda_prestamos:

            }

        }

        if (0 === strpos($pathinfo, '/r')) {
            // reservacion_principal
            if (rtrim($pathinfo, '/') === '/reservacion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reservacion_principal');
                }

                return array (  '_controller' => 'ProyUser\\ReservacionBundle\\Controller\\RecervacionController::principalAction',  '_route' => 'reservacion_principal',);
            }

            if (0 === strpos($pathinfo, '/rms')) {
                // rms_marcaciones_principal
                if (rtrim($pathinfo, '/') === '/rms') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'rms_marcaciones_principal');
                    }

                    return array (  '_controller' => 'ProyUser\\RmsMarcacionesBundle\\Controller\\RmsMarcacionesController::principalAction',  '_route' => 'rms_marcaciones_principal',);
                }

                // rms_marcaciones_busqueda_mes_anno
                if ($pathinfo === '/rms/busqueda/annomes') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_rms_marcaciones_busqueda_mes_anno;
                    }

                    return array (  '_controller' => 'ProyUser\\RmsMarcacionesBundle\\Controller\\RmsMarcacionesController::busquedaPorMesAnnoAction',  '_route' => 'rms_marcaciones_busqueda_mes_anno',);
                }
                not_rms_marcaciones_busqueda_mes_anno:

            }

        }

        if (0 === strpos($pathinfo, '/login')) {
            // autenticacion_login
            if (rtrim($pathinfo, '/') === '/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'autenticacion_login');
                }

                return array (  '_controller' => 'ProyUser\\AutenticacionBundle\\Controller\\AutenticacionController::loginAction',  '_route' => 'autenticacion_login',);
            }

            if (0 === strpos($pathinfo, '/login/log')) {
                // autenticacion_login_check
                if ($pathinfo === '/login/login_check') {
                    return array('_route' => 'autenticacion_login_check');
                }

                // autenticacion_logout
                if ($pathinfo === '/login/logout') {
                    return array('_route' => 'autenticacion_logout');
                }

            }

            // autenticacion_delogueo
            if ($pathinfo === '/login/desloguear') {
                return array (  '_controller' => 'ProyUser\\AutenticacionBundle\\Controller\\AutenticacionController::desloguearAction',  '_route' => 'autenticacion_delogueo',);
            }

        }

        // perfil_principal
        if (rtrim($pathinfo, '/') === '/perfil') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'perfil_principal');
            }

            return array (  '_controller' => 'ProyUser\\UsuarioBundle\\Controller\\PerfilController::principalAction',  '_route' => 'perfil_principal',);
        }

        if (0 === strpos($pathinfo, '/directorio')) {
            // directorio_principal
            if (rtrim($pathinfo, '/') === '/directorio') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'directorio_principal');
                }

                return array (  '_controller' => 'ProyUser\\UsuarioBundle\\Controller\\DirectorioController::principalAction',  '_route' => 'directorio_principal',);
            }

            // directorio_busqueda
            if (0 === strpos($pathinfo, '/directorio/buscar') && preg_match('#^/directorio/buscar/(?P<filtros>[^/]++)/(?P<pag>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'directorio_busqueda')), array (  '_controller' => 'ProyUser\\UsuarioBundle\\Controller\\DirectorioController::buscarAction',));
            }

        }

        // principal
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'principal');
            }

            return array (  '_controller' => 'ProyUser\\AutenticacionBundle\\Controller\\AutenticacionController::principalAction',  '_route' => 'principal',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
