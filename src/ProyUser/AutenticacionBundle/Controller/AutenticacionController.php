<?php

namespace ProyUser\AutenticacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use ProyUser\UsuarioBundle\Entity\Persona;
use ProyUser\AutenticacionBundle\Entity\Ldap;

use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;



class AutenticacionController extends Controller
{
    public function loginAction()
    {
        if($this->logueadoAction())
        {
            //echo $this->get('security.context')->getToken()->getUser()->getEdad();die;
            return $this->redirect($this->generateUrl('principal'));
        }
        else
        {
            $peticion = $this->getRequest();
            if ($peticion->getMethod() == 'POST')
            {
                $username=$peticion->get('_username');
                $password=$peticion->get('_password');
                /*$em = $this->getDoctrine()->getManager();
                $personaBD = $em->getRepository('UsuarioBundle:Persona')->find(89121921005);
                echo $personaBD->getNombre();die;*/
                if($this->esValidoSinPCAction($username,$password) || $this->esValidoDominioAction($username,$password) )
                {
                    return $this->render('::base.html.twig');
                }
            }
            return $this->render('AutenticacionBundle:Default:login.html.twig');
        }
    }

    public function desloguearAction()
    {
        $this->container->get('security.context')->setToken(null);
        return $this->redirect($this->generateUrl('autenticacion_login'));
    }

    public function principalAction()
    {
        if($this->logueadoAction())
        {
            return $this->render('::base.html.twig');
        }
        else
        {
            return $this->redirect($this->generateUrl('autenticacion_login'));
        }
    }

    public function logueadoAction()
    {
        return $this->get('security.context')->isGranted(array('ROLE_ADMIN','ROLE_USER'));
    }

    function esValidoDominioAction($user,$pass)
    {
        $ClassLDA = new Ldap();
        $resp = false;

        if($ClassLDA->crearConex("emproy2.com.cu",389) && $ClassLDA->auntenticarUsuario($user,$pass))
        {
            $datosUsuario = $ClassLDA->datosDeUsuario($user);
            if($datosUsuario != false)
            {
                //print_r($datosUsuario);die;
                $_SESSION['login']['nombreApell'] = $datosUsuario['nombreApell'];
                $_SESSION['login']['nombre'] = $datosUsuario['nombre'];
                $_SESSION['login']['informacion'] = $datosUsuario['infoemacion'];
            }
            else
            {
                $datosUsuario['nombreApell'] = $user;
                $datosUsuario['nombre'] = $user;
                $datosUsuario['informacion'] = "";
            }
            //ENTRAR AL USUARIO A LA BD MySQL-------------------------------------------------------------------
            $em = $this->getDoctrine()->getManager();
            $personaBD = $em->getRepository('UsuarioBundle:Persona')->findOneBy(array('user'=>"$user"));
            if($personaBD!=null)
            {
                $personaBD->setPassDominio($pass);
                $em->persist($personaBD);
                $em->flush();
                //echo $personaBD->getNombre();die;
				
                $token=new UsernamePasswordToken($personaBD,$personaBD->getPassDominio(),'secured_area',array('ROLE_USER'));
                $this->container->get('security.context')->setToken($token);
                $resp = true;
            }
            else
            {
                $todasPersonas = $em->getRepository('UsuarioBundle:Persona')->findAll();
                $busq = $this->coinsidir_userLDAP_con_MySQL_Action($datosUsuario['nombreApell'], $todasPersonas);
                if($busq[0]!=0)
                {
                    $busq[1]->setPassDominio($pass);
                    $busq[1]->setUser($user);
                    $em->persist($busq[1]);
                    $em->flush();
                    $personaBD = $em->getRepository('UsuarioBundle:Persona')->findOneBy(array('user'=>"$user"));
                    $token=new UsernamePasswordToken($personaBD,$personaBD->getPassDominio(),'secured_area','ROLE_USER');
                    $this->container->get('security.context')->setToken($token);
                    $resp = true;
                }
            }
            //----------------------------------------------------------------
        }
		
        return $resp;
    }

    function coinsidir_userLDAP_con_MySQL_Action($nombDom, $todasPersonas)
    {
        $arrNombreDominio = explode(" ",$nombDom);
        $val = 0;
        $resp = array(0,"");
        foreach($todasPersonas as $persona)
        {
            $nombre = trim($persona->getNombre()," ");
            $arrNombre = explode(" ",$nombre);
            $val = 0;
            for($g=0;$g<count($arrNombreDominio) && $g<count($arrNombre);$g++)
            {
                if(substr(trim(strtolower($arrNombreDominio[$g])),1,3) == substr(trim(strtolower($arrNombre[$g])),1,3))
                {
                    $val++;
                }
            }
            if($resp[0]<$val)
            {
                $resp[0] = $val;
                $resp[1] = $persona;
            }
        }
        return $resp;
    }

    function esValidoSinPCAction($user,$pass)
    {
        /*$datos = explode("-",$user);
                $sentencia = "SELECT p FROM ProyUser\UsuarioBundle\Entity\Persona p WHERE p.cIdentida = $datos[1] AND p.nombre LIKE '".$datos[0]."%' AND p.tarjetaReloj = $pass ORDER BY p.noTarjeta ASC";   
                $consulta = $em->createQuery($sentencia);
                $personaBD = $consulta->getSingleResult();*/
				$em = $this->getDoctrine()->getManager();
                $personaBD = $em->getRepository('UsuarioBundle:Persona')->findOneBy(array('tarjetaReloj'=>$pass));
                if($personaBD!= null && strnatcasecmp(explode(" ",$personaBD->getNombre())[0]."-".$personaBD->getCIdentida(),$user) == 0 )
                {
                    $token=new UsernamePasswordToken($personaBD,$personaBD->getPassDominio(),'secured_area',array('ROLE_USER'));
                    $this->container->get('security.context')->setToken($token);
                    $resp = true;
                }
        return $resp;
    }

}
