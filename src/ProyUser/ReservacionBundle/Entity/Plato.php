<?php
/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 2/05/15
 * Time: 23:24
 */

namespace ProyUser\ReservacionBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="plato")
 */
class Plato
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $nombre;

    /**
     * @ORM\Column(type="text")
     */
    protected $descripcion;

    /**
     * @ORM\Column(type="float")
     */
    protected $precio;

    /**
     * @ORM\ManyToMany(targetEntity="ProyUser\ReservacionBundle\Entity\Carta_almuerzos", mappedBy="plato")
     */
    protected $cartas_almuerzos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cartas_almuerzos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return Plato
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Plato
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set precio
     *
     * @param float $precio
     * @return Plato
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Add cartas_almuerzos
     *
     * @param \ProyUser\ReservacionBundle\Entity\Carta_almuerzos $cartasAlmuerzos
     * @return Plato
     */
    public function addCartasAlmuerzo(\ProyUser\ReservacionBundle\Entity\Carta_almuerzos $cartasAlmuerzos)
    {
        $this->cartas_almuerzos[] = $cartasAlmuerzos;

        return $this;
    }

    /**
     * Remove cartas_almuerzos
     *
     * @param \ProyUser\ReservacionBundle\Entity\Carta_almuerzos $cartasAlmuerzos
     */
    public function removeCartasAlmuerzo(\ProyUser\ReservacionBundle\Entity\Carta_almuerzos $cartasAlmuerzos)
    {
        $this->cartas_almuerzos->removeElement($cartasAlmuerzos);
    }

    /**
     * Get cartas_almuerzos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCartasAlmuerzos()
    {
        return $this->cartas_almuerzos;
    }
}
