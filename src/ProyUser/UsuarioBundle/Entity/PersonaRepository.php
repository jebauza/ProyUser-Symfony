<?php
/**
 * Created by PhpStorm.
 * User: J.B
 * Date: 12/04/2015
 * Time: 19:11
 */

namespace ProyUser\UsuarioBundle\Entity;
use Doctrine\ORM\EntityRepository;


class PersonaRepository extends EntityRepository
{

    public function buscar()
    {
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('SELECT p FROM ProyUser\UsuarioBundle\Entity\Persona p ORDER BY p.nombre ASC');
        $consulta->setMaxResults(5);
        return $consulta->getResult();
    }

    //public function


} 