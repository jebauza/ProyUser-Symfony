<?php

namespace ProyUser\ArchivoBibliotecaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ProyUser\ArchivoBibliotecaBundle\Entity\Biblioteca\libro;
use ProyUser\ArchivoBibliotecaBundle\Entity\Prestamos;

use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class DefaultController extends Controller
{
    public function principalAction()
    {
        return $this->render('ArchivoBibliotecaBundle:Documentos:documentos.html.twig', array('activo' => "general"));
    }


    public function principalwwAction()
    {
        //echo "entre a Arc-Biblio";die;
        //echo $_SERVER["SCRIPT_FILENAME"];die;
        //echo $_SERVER["CONTEXT_DOCUMENT_ROOT"];die;
        //echo $_SERVER["DOCUMENT_ROOT"];die;
        //echo $_SERVER["SCRIPT_NAME"];die;
        $classPrestamos = new Prestamos();
        //$arr = array(array('parametro'=>"idioma",'valor'=>"espa"));
         //$arr = $this->convertir_parametors_busqueda_array("","","","","espa","","","","","","","");
        //print_r($arr);die;
        $nombre = $this->get('security.context')->getToken()->getUser()->getNombre();
        //echo $nombre;die;

        //$arr = array();
        //$classPrestamos->fff($nombre);
        print_r($classPrestamos->buscarPrestamos($nombre));die;



        //return $this->render('ArchivoBibliotecaBundle:Default:index.html.twig', array('name' => $name));
    }

    private function convertir_parametors_busqueda_array($titulo,$autor,$institucion,$nacion,$idioma,$editorial,$conservacion,$categoria,$tema,$tipo_documento,$estante,$nivel)
    {
        $arrayResp = array();
        if(!empty($titulo))
        {
            $arrayResp[] = array('parametro'=>"titulo",'valor'=>$titulo);
        }
        if(!empty($autor))
        {
            $arrayResp[] = array('parametro'=>"apell_nombre_autor",'valor'=>$autor);
        }
        if(!empty($institucion))
        {
            $arrayResp[] = array('parametro'=>"institucion",'valor'=>$institucion);
        }
        if(!empty($nacion))
        {
            $arrayResp[] = array('parametro'=>"nacion",'valor'=>$nacion);
        }
        if(!empty($idioma))
        {
            $arrayResp[] = array('parametro'=>"idioma",'valor'=>$idioma);
        }
        if(!empty($editorial))
        {
            $arrayResp[] = array('parametro'=>"editorial",'valor'=>$editorial);
        }
        if(!empty($conservacion))
        {
            $arrayResp[] = array('parametro'=>"conservacion",'valor'=>$conservacion);
        }
        if(!empty($categoria))
        {
            $arrayResp[] = array('parametro'=>"categoria",'valor'=>$categoria);
        }
        if(!empty($tema))
        {
            $arrayResp[] = array('parametro'=>"tema",'valor'=>$tema);
        }
        if(!empty($tipo_documento))
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
        }
        return $arrayResp;
    }
}
