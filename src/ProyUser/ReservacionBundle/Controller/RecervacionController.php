<?php

namespace ProyUser\ReservacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RecervacionController extends Controller
{
    public function principalAction()
    {
        return $this->render('ReservacionBundle:Default:carta_almuezo.html.twig');
    }
}
