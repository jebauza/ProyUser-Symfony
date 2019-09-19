<?php

namespace ProyUser\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComentarioCumple
 *
 * @ORM\Table(name="comentario_cumple")
 * @ORM\Entity
 */
class ComentarioCumple
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_comentario_cumple", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComentarioCumple;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_comenta", type="string", length=30, nullable=false)
     */
    private $nombreComenta;

    /**
     * @var string
     *
     * @ORM\Column(name="user_comenta", type="string", length=15, nullable=false)
     */
    private $userComenta;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="text", nullable=false)
     */
    private $comentario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="ci_cumple_anno", type="string", length=11, nullable=false)
     */
    private $ciCumpleAnno;



    /**
     * Get idComentarioCumple
     *
     * @return integer 
     */
    public function getIdComentarioCumple()
    {
        return $this->idComentarioCumple;
    }

    /**
     * Set nombreComenta
     *
     * @param string $nombreComenta
     * @return ComentarioCumple
     */
    public function setNombreComenta($nombreComenta)
    {
        $this->nombreComenta = $nombreComenta;

        return $this;
    }

    /**
     * Get nombreComenta
     *
     * @return string 
     */
    public function getNombreComenta()
    {
        return $this->nombreComenta;
    }

    /**
     * Set userComenta
     *
     * @param string $userComenta
     * @return ComentarioCumple
     */
    public function setUserComenta($userComenta)
    {
        $this->userComenta = $userComenta;

        return $this;
    }

    /**
     * Get userComenta
     *
     * @return string 
     */
    public function getUserComenta()
    {
        return $this->userComenta;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     * @return ComentarioCumple
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ComentarioCumple
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set ciCumpleAnno
     *
     * @param string $ciCumpleAnno
     * @return ComentarioCumple
     */
    public function setCiCumpleAnno($ciCumpleAnno)
    {
        $this->ciCumpleAnno = $ciCumpleAnno;

        return $this;
    }

    /**
     * Get ciCumpleAnno
     *
     * @return string 
     */
    public function getCiCumpleAnno()
    {
        return $this->ciCumpleAnno;
    }
}
