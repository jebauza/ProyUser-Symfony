<?php

namespace ProyUser\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ProyUser\UsuarioBundle\Entity\Persona;

class DirectorioController extends Controller
{
    public function principalAction()
    {
        $em = $this->getDoctrine()->getManager();
        $consulta = $em->createQuery("SELECT p FROM ProyUser\UsuarioBundle\Entity\Persona p ORDER BY p.noTarjeta ASC");
        $consulta->setMaxResults(11);
        $consulta->setFirstResult(0);
        $todasPersonasBD = $consulta->getResult();
        return $this->render('UsuarioBundle:Directorio:directorio.html.twig', array('todasPersonas'=>$todasPersonasBD,'filtros'=>"todo",'pagina'=>"0"));
    }

    public function buscarAction($filtros,$pag)
    {
       $arrValor = explode("|",$filtros);
       // print_r($arrValor);die;
       $dql = "";
       if($filtros != "todo")
       {
           $dql = "WHERE";
           for($i=0;$i<count($arrValor) && $filtros != "todo";$i++)
           {
               $criterio = explode("-",$arrValor[$i])[0];
               $valor =  explode("-",$arrValor[$i])[1];
               $ponerAND = " AND";
               if($i == count($arrValor)-1)
               {
                   $ponerAND = "";
               }
               if($criterio == "nombre")
               {
                   $dql = $dql." p.nombre LIKE '%".$valor."%'$ponerAND";
               }
               if($criterio == "correo")
               {
                   $dql = $dql." p.correo LIKE '%".$valor."%'$ponerAND";
               }
               if($criterio == "area")
               {
                   $dql = $dql." p.area LIKE '%".$valor."%'$ponerAND";
               }
               if($criterio == "departamento")
               {
                   $dql = $dql." p.departamento LIKE '%".$valor."%'$ponerAND";
               }
               if($criterio == "municipio")
               {
                   $dql = $dql." p.municipio LIKE '%".$valor."%'$ponerAND";
               }
               if($criterio == "solapin")
               {
                   $dql = $dql." p.noTarjeta LIKE '%".$valor."%'$ponerAND";
               }
               if($criterio == "cargo")
               {
                   $dql = $dql." p.cargoActual LIKE '%".$valor."%'$ponerAND";
               }
               if($criterio == "piso")
               {
                   $dql = $dql." p.piso LIKE '%".$valor."%'$ponerAND";
               }
               if($criterio == "cubiculo")
               {
                   $dql = $dql." p.cubiculo LIKE '%".$valor."%'$ponerAND";
               }
               if($criterio == "telefono")
               {
                   $dql = $dql." p.telefonoOficina LIKE '%".$valor."%'$ponerAND";
               }
           }
       }


        $sentencia = "SELECT p FROM ProyUser\UsuarioBundle\Entity\Persona p *cambio* ORDER BY p.noTarjeta ASC";
        $sentencia = str_ireplace("*cambio*", $dql, $sentencia);

        $pagina = 10*$pag;
        $em = $this->getDoctrine()->getManager();
        $consulta = $em->createQuery($sentencia);
        $consulta->setMaxResults(11);
        $consulta->setFirstResult($pagina);
        $todasPersonasBD = $consulta->getResult();
        return $this->render('UsuarioBundle:Directorio:directorio.html.twig', array('todasPersonas'=>$todasPersonasBD,'filtros'=>$filtros,'pagina'=>$pag));
    }
}
