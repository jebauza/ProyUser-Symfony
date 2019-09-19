<?php
/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 3/05/15
 * Time: 0:49
 */

namespace ProyUser\ReservacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="reservacion_almuerzo")
 */
class Reservacion_almuerzo
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $fecha_reservacion;

    /**
     * @ORM\ManyToOne(targetEntity="ProyUser\UsuarioBundle\Entity\Persona")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="C_IDENTIDA")
     */
    protected $usuario;

    /**
     * @ORM\ManyToOne(targetEntity="ProyUser\ReservacionBundle\Entity\Carta_almuerzos")
     */
    protected $carta_reservacion;



    /**
     * @ORM\Column(type="float")
     */
    protected $importe;

    /**
     * @ORM\Column(type="integer")
     */
    protected $cant_platos;

    /**
     * @ORM\OneToMany(targetEntity="ProyUser\ReservacionBundle\Entity\Plato", mappedBy="reservacion_almuerzo")
     */
    protected $platos;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->platos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fecha_reservacion
     *
     * @param \DateTime $fechaReservacion
     * @return Reservacion_almuerzo
     */
    public function setFechaReservacion($fechaReservacion)
    {
        $this->fecha_reservacion = $fechaReservacion;

        return $this;
    }

    /**
     * Get fecha_reservacion
     *
     * @return \DateTime 
     */
    public function getFechaReservacion()
    {
        return $this->fecha_reservacion;
    }

    /**
     * Set importe
     *
     * @param float $importe
     * @return Reservacion_almuerzo
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return float 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set cant_platos
     *
     * @param \int $cantPlatos
     * @return Reservacion_almuerzo
     */
    public function setCantPlatos(\int $cantPlatos)
    {
        $this->cant_platos = $cantPlatos;

        return $this;
    }

    /**
     * Get cant_platos
     *
     * @return \int 
     */
    public function getCantPlatos()
    {
        return $this->cant_platos;
    }

    /**
     * Set usuario
     *
     * @param \ProyUser\UsuarioBundle\Entity\Persona $usuario
     * @return Reservacion_almuerzo
     */
    public function setUsuario(\ProyUser\UsuarioBundle\Entity\Persona $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \ProyUser\UsuarioBundle\Entity\Persona 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set carta_almuerzo
     *
     * @param \ProyUser\ReservacionBundle\Entity\Carta_almuerzos $cartaAlmuerzo
     * @return Reservacion_almuerzo
     */
    public function setCartaAlmuerzo(\ProyUser\ReservacionBundle\Entity\Carta_almuerzos $cartaAlmuerzo = null)
    {
        $this->carta_almuerzo = $cartaAlmuerzo;

        return $this;
    }

    /**
     * Get carta_almuerzo
     *
     * @return \ProyUser\ReservacionBundle\Entity\Carta_almuerzos 
     */
    public function getCartaAlmuerzo()
    {
        return $this->carta_almuerzo;
    }

    /**
     * Add platos
     *
     * @param \ProyUser\ReservacionBundle\Entity\Plato $platos
     * @return Reservacion_almuerzo
     */
    public function addPlato(\ProyUser\ReservacionBundle\Entity\Plato $platos)
    {
        $this->platos[] = $platos;

        return $this;
    }

    /**
     * Remove platos
     *
     * @param \ProyUser\ReservacionBundle\Entity\Plato $platos
     */
    public function removePlato(\ProyUser\ReservacionBundle\Entity\Plato $platos)
    {
        $this->platos->removeElement($platos);
    }

    /**
     * Get platos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlatos()
    {
        return $this->platos;
    }
}
