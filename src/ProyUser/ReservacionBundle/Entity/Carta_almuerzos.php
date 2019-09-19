<?php
/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 26/04/15
 * Time: 18:08
 */

namespace ProyUser\ReservacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="carta_almuerzos")
 */
class Carta_almuerzos
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(type="date")
     */
    protected $fecha_venta;

    /**
     * @ORM\ManyToMany(targetEntity="ProyUser\ReservacionBundle\Entity\Plato", inversedBy="cartas_almuerzos")
     * @ORM\JoinTable(name="cartaalmuezo_plato",
     *      joinColumns={@ORM\JoinColumn(name="cartaalmuezo_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="plato_id", referencedColumnName="id")})
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
     * Set fecha_venta
     *
     * @param \DateTime $fechaVenta
     * @return Carta_almuerzos
     */
    public function setFechaVenta($fechaVenta)
    {
        $this->fecha_venta = $fechaVenta;

        return $this;
    }

    /**
     * Get fecha_venta
     *
     * @return \DateTime 
     */
    public function getFechaVenta()
    {
        return $this->fecha_venta;
    }

    /**
     * Add platos
     *
     * @param \ProyUser\ReservacionBundle\Entity\Plato $platos
     * @return Carta_almuerzos
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
