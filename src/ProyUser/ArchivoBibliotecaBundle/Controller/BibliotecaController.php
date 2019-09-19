<?php

namespace ProyUser\ArchivoBibliotecaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ProyUser\ArchivoBibliotecaBundle\Entity\Biblioteca\libro;
use ProyUser\ArchivoBibliotecaBundle\Entity\Biblioteca\Revista;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use ProyUser\ArchivoBibliotecaBundle\Entity\Prestamos;

use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class BibliotecaController extends Controller
{
    public function principalAction()
    {
        //$class = new libro();
        //$arr = array(array('parametro'=>"idioma",'valor'=>"espa"));
        //$arr = $this->convertir_array_parametros_libro("","","","","","","","","","revista","","");
        $class = new Revista();
        $arr = $this->convertir_array_parametros(array('revista'=>array('numero'=>"",'mes_otro'=>"",'anno'=>"1979")),"","","","","espa","","","","","","","");

        print_r($class->buscarPorParametros($arr));die;
    }

    public function buscarLibrosAction()
    {
        $peticion = $this->getRequest();
        if ($peticion->getMethod() == 'POST')
        {
            $arrayResp = array();
            $arrCampos = array();
            $arrCaracteresEspeciales = array('Ã±'=>'o');

            $titulo = $peticion->get("_titulo");
            if(!empty($titulo))
            {
                $arrayResp[] = array('parametro'=>"titulo",'valor'=>$titulo);
                $arrCampos['titulo'] = $titulo;
            }
            $autor = $peticion->get("_autor");
            if(!empty($autor))
            {
                $arrayResp[] = array('parametro'=>"apell_nombre_autor",'valor'=>$autor);
                $arrCampos['autor'] = $autor;
            }
            /*$institucion = $peticion->get("_institucion");
            if(!empty($institucion))
            {
                $arrayResp[] = array('parametro'=>"institucion",'valor'=>$institucion);
            }*/
            $nacion = $peticion->get("_pais");
            if(!empty($nacion))
            {
                $arrayResp[] = array('parametro'=>"nacion",'valor'=>$nacion);
                $arrCampos['nacion'] = $nacion;
            }
            $idioma = $peticion->get("_idioma");
            if(!empty($idioma))
            {
                $arrayResp[] = array('parametro'=>"idioma",'valor'=>$idioma);
                $arrCampos['idioma'] = $idioma;
            }
            $editorial = $peticion->get("_editorial");
            if(!empty($editorial))
            {
                $arrayResp[] = array('parametro'=>"editorial",'valor'=>$editorial);
                $arrCampos['editorial'] = $editorial;
            }
            /*$conservacion = $peticion->get("_conservacion");
            if(!empty($conservacion))
            {
                $arrayResp[] = array('parametro'=>"conservacion",'valor'=>$conservacion);
            }*/
            $categoria = $peticion->get("_categoria");
            if(!empty($categoria))
            {
                $arrayResp[] = array('parametro'=>"categoria",'valor'=>$categoria);
                $arrCampos['categoria'] = $categoria;
            }
            $tema = $peticion->get("_tema");
            if(!empty($tema))
            {
                $arrayResp[] = array('parametro'=>"tema",'valor'=>$tema);
                $arrCampos['tema'] = $tema;
            }

           /* if(!empty($tipo_documento))
            {
                $arrayResp[] = array('parametro'=>"tipo_documento",'valor'=>$tipo_documento);
            }
            if(!empty($estante))
            {
                $arrayResp[] = array('parametro'=>"estante",'valor'=>$estante);
            }
            if(!empty($nivel))
            {
                $arrayResp[] = array('parametro'=>"nivel",'valor'=>$nivel);
            }*/

            $classLibro = new libro();
            $classPrestamos = new Prestamos();
            $nombre = $this->get('security.context')->getToken()->getUser()->getNombre();
            $cantAlertasArrPrestamos = $classPrestamos->buscarPrestamos($nombre);
            //print_r($classLibro->buscarPorParametros($arrayResp));die;
            return $this->render('ArchivoBibliotecaBundle:Documentos:documentos.html.twig', array('activo'=>"libro", 'arrLibros'=>$classLibro->buscarPorParametros($arrayResp), 'arrCamposLibro'=>$arrCampos,'arrPrestamos'=>$cantAlertasArrPrestamos['arrPrestamos'],'cantAlertas'=>$cantAlertasArrPrestamos['cantAlertas']));

        }
    }

    public function buscarRevistasAction()
    {
        $peticion = $this->getRequest();
        if ($peticion->getMethod() == 'POST')
        {
            $arrayResp = array();
            $arrCampos = array();
            $arrCaracteresEspeciales = array('Ã±'=>'o');

            $titulo = $peticion->get("_titulo");
            if(!empty($titulo))
            {
                $arrayResp[] = array('parametro'=>"titulo",'valor'=>$titulo);
                $arrCampos['titulo'] = $titulo;
            }
            $mes = $peticion->get("_mes");
            if(!empty($mes))
            {
                $arrayResp[] = array('parametro'=>"apell_nombre_autor",'valor'=>$mes);
                $arrCampos['mes'] = $mes;
            }
            /*$institucion = $peticion->get("_institucion");
            if(!empty($institucion))
            {
                $arrayResp[] = array('parametro'=>"institucion",'valor'=>$institucion);
            }*/
            $anno = $peticion->get("_anno");
            if(!empty($anno))
            {
                $arrayResp[] = array('parametro'=>"anno",'valor'=>$anno);
                $arrCampos['anno'] = $anno;
            }
            $editorial = $peticion->get("_editorial");
            if(!empty($editorial))
            {
                $arrayResp[] = array('parametro'=>"editorial",'valor'=>$editorial);
                $arrCampos['editorial'] = $editorial;
            }
            $frecuencia = $peticion->get("_frecuencia");
            if(!empty($frecuencia))
            {
                $arrayResp[] = array('parametro'=>"frecuencia",'valor'=>$frecuencia);
                $arrCampos['frecuencia'] = $frecuencia;
            }
            $nacion = $peticion->get("_nacion");
            if(!empty($nacion))
            {
                $arrayResp[] = array('parametro'=>"nacion",'valor'=>$nacion);
                $arrCampos['nacion'] = $nacion;
            }
            $idioma = $peticion->get("_idioma");
            if(!empty($idioma))
            {
                $arrayResp[] = array('parametro'=>"idioma",'valor'=>$idioma);
                $arrCampos['idioma'] = $idioma;
            }
            $categoria = $peticion->get("_categoria");
            if(!empty($categoria))
            {
                $arrayResp[] = array('parametro'=>"categoria",'valor'=>$categoria);
                $arrCampos['categoria'] = $categoria;
            }

            $classRevista = new Revista();
            $classPrestamos = new Prestamos();
            $nombre = $this->get('security.context')->getToken()->getUser()->getNombre();
            $cantAlertasArrPrestamos = $classPrestamos->buscarPrestamos($nombre);

            //print_r($classRevista->buscarPorParametros($arrayResp));die;
            return $this->render('ArchivoBibliotecaBundle:Documentos:documentos.html.twig', array('activo'=>"revista", 'arrRevistas'=>$classRevista->buscarPorParametros($arrayResp), 'arrCamposRevista'=>$arrCampos,'arrPrestamos'=>$cantAlertasArrPrestamos['arrPrestamos'],'cantAlertas'=>$cantAlertasArrPrestamos['cantAlertas']));

        }
    }



}
