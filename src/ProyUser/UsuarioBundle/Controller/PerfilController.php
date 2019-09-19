<?php

namespace ProyUser\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ProyUser\UsuarioBundle\Entity\Dbase;

class PerfilController extends Controller
{
    public function principalAction()
    {
       /*$classDbase = new Dbase();
        $classDbase->nueva();*/

        return $this->render('UsuarioBundle:Perfil:perfil.html.twig');
    }
}