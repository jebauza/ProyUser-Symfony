<?php

namespace ProyUser\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voto
 *
 * @ORM\Table(name="voto")
 * @ORM\Entity
 */
class Voto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_voto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVoto;

    /**
     * @var string
     *
     * @ORM\Column(name="Ci_votante", type="string", length=12, nullable=false)
     */
    private $ciVotante = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Ci_votado", type="string", length=12, nullable=false)
     */
    private $ciVotado = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_voto", type="string", length=255, nullable=true)
     */
    private $tipoVoto;



    /**
     * Get idVoto
     *
     * @return integer 
     */
    public function getIdVoto()
    {
        return $this->idVoto;
    }

    /**
     * Set ciVotante
     *
     * @param string $ciVotante
     * @return Voto
     */
    public function setCiVotante($ciVotante)
    {
        $this->ciVotante = $ciVotante;

        return $this;
    }

    /**
     * Get ciVotante
     *
     * @return string 
     */
    public function getCiVotante()
    {
        return $this->ciVotante;
    }

    /**
     * Set ciVotado
     *
     * @param string $ciVotado
     * @return Voto
     */
    public function setCiVotado($ciVotado)
    {
        $this->ciVotado = $ciVotado;

        return $this;
    }

    /**
     * Get ciVotado
     *
     * @return string 
     */
    public function getCiVotado()
    {
        return $this->ciVotado;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Voto
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
     * Set tipoVoto
     *
     * @param string $tipoVoto
     * @return Voto
     */
    public function setTipoVoto($tipoVoto)
    {
        $this->tipoVoto = $tipoVoto;

        return $this;
    }

    /**
     * Get tipoVoto
     *
     * @return string 
     */
    public function getTipoVoto()
    {
        return $this->tipoVoto;
    }
}
