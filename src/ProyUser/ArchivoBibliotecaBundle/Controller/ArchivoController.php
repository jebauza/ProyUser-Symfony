<?php

namespace ProyUser\ArchivoBibliotecaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use ProyUser\ArchivoBibliotecaBundle\Entity\Archivo\Proyecto;
use ProyUser\ArchivoBibliotecaBundle\Entity\Prestamos;

use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;


class ArchivoController extends Controller
{
    public function principalAction()
    {
        return $this->render('ArchivoBibliotecaBundle:Archivo:principal.html.twig');
    }

    public function busquedaAction()
    {
        $peticion = $this->getRequest();
        //echo $peticion->get("_nombre");die;
        if ($peticion->getMethod() == 'POST')
        {
            $arrayResp = array();
            $arrCampos = array();
            $arrCaracteresEspeciales = array('Ã±'=>'o');
            $nombre = $peticion->get("_nombre");
            if(!empty($nombre))
            {
                $arrayResp[] = array('parametro'=>"nombre",'valor'=>$nombre);
                $arrCampos['nombre'] = $nombre;
            }
            $nombre_actual = $peticion->get('_nombre_actual');
            if(!empty($nombre_actual))
            {
                $arrayResp[] = array('parametro'=>"nombre_actual",'valor'=>$nombre_actual);
                $arrParametros['nombre_actual'] = $nombre_actual;
            }
            $proyectista = $peticion->get('_proyectista');
            if(!empty($proyectista))
            {
                $proyectista = strtr($proyectista, $arrCaracteresEspeciales);
                $arrayResp[] = array('parametro'=>"nombre_proyectista",'valor'=>$proyectista);
                $arrCampos['proyectista'] = $proyectista;
            }
            $anno = $peticion->get('_anno');
            if(!empty($anno))
            {
                $arrayResp[] = array('parametro'=>"anno_proyecto",'valor'=>$anno);
                $arrCampos['anno'] = $anno;
            }
            $programa = $peticion->get('_programa');
            if(!empty($programa))
            {
                $arrayResp[] = array('parametro'=>"programa",'valor'=>$programa);
                $arrCampos['programa'] = $programa;
            }
            $sistema_const = $peticion->get('_sistema_const');
            if(!empty($sistema_const))
            {
                $arrayResp[] = array('parametro'=>"sistema_construccion",'valor'=>$sistema_const);
                $arrCampos['sistema_const'] = $sistema_const;
            }
            $especialidad = $peticion->get('_especialidad');
            if(!empty($especialidad))
            {
                $arrayResp[] = array('parametro'=>"especialidad",'valor'=>$especialidad);
                $arrCampos['especialidad'] = $especialidad;
            }
            $etapa = $peticion->get('_etapa');
            if(!empty($etapa))
            {
                $arrayResp[] = array('parametro'=>"etapa",'valor'=>$etapa);
                $arrCampos['etapa'] = $etapa;
            }
            $observacion = $peticion->get('_observacion');
            if(!empty($observacion))
            {
                $arrayResp[] = array('parametro'=>"observacion",'valor'=>$observacion);
            }

            $classProyecto = new Proyecto();
            //print_r($classProyecto->buscarPorParametros($arrayResp));die;
            //echo $classProyecto->buscarPorParametros($arrayResp)[0]['nombre'];die;
            //echo substr ( $classProyecto->buscarPorParametros($arrayResp)[0]['nombre_proyectista'] , 5,1 );die;
            //echo bin2hex (substr ( $classProyecto->buscarPorParametros($arrayResp)[0]['nombre_proyectista'] , 5,1 ));die;
            //print_r($classProyecto->buscarPorParametros($arrayResp));die;
            $classPrestamos = new Prestamos();
            $nombre = $this->get('security.context')->getToken()->getUser()->getNombre();
            $cantAlertasArrPrestamos = $classPrestamos->buscarPrestamos($nombre);
            return $this->render('ArchivoBibliotecaBundle:Documentos:documentos.html.twig', array('activo'=>"proyecto", 'arrProyectos'=>$classProyecto->buscarPorParametros($arrayResp), 'arrCamposProyecto'=>$arrCampos,'arrPrestamos'=>$cantAlertasArrPrestamos['arrPrestamos'],'cantAlertas'=>$cantAlertasArrPrestamos['cantAlertas']));

        }
    }
}
