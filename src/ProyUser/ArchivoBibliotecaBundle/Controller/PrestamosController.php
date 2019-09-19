<?php

namespace ProyUser\ArchivoBibliotecaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use ProyUser\ArchivoBibliotecaBundle\Entity\Prestamos;

use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;


class PrestamosController extends Controller
{
    public function principalAction()
    {
        $classPrestamos = new Prestamos();
        $nombre = $this->get('security.context')->getToken()->getUser()->getNombre();
        $cantAlertasArrPrestamos = $classPrestamos->buscarPrestamos($nombre);
        return $this->render('ArchivoBibliotecaBundle:Documentos:documentos.html.twig', array('activo' => "general", 'arrPrestamos'=>$cantAlertasArrPrestamos['arrPrestamos'],'cantAlertas'=>$cantAlertasArrPrestamos['cantAlertas']));
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
