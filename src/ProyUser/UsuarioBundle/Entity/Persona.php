<?php

namespace ProyUser\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 * @ORM\Entity(repositoryClass="ProyUser\UsuarioBundle\Entity\PersonaRepository")
 * @ORM\Table(name="persona")
 * @ORM\Entity
 */
class Persona
{


    /**
     * @var string
     *
     * @ORM\Column(name="USER", type="string", length=30, nullable=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="text", nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="CORREO", type="string", length=50, nullable=true)
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="PASS_DOMINIO", type="string", length=30, nullable=true)
     */
    private $passDominio;

    /**
     * @var integer
     *
     * @ORM\Column(name="NO_TARJETA", type="integer", nullable=false)
     */
    private $noTarjeta;

    /**
     * @var integer
     *
     * @ORM\Column(name="AREA_NUM", type="integer", nullable=false)
     */
    private $areaNum;

    /**
     * @var string
     *
     * @ORM\Column(name="AREA", type="text", nullable=false)
     */
    private $area;

    /**
     * @var integer
     *
     * @ORM\Column(name="CODIGO_DPTO", type="integer", nullable=false)
     */
    private $codigoDpto;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPARTAMENTO", type="text", nullable=false)
     */
    private $departamento;

    /**
     * @ORM\Id
     * @var string
     * @ORM\Column(name="C_IDENTIDA", type="string", length=12, nullable=false)
     */
    private $cIdentida;

    /**
     * @var string
     *
     * @ORM\Column(name="SEXO", type="string", length=1, nullable=false)
     */
    private $sexo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_ALTA", type="date", nullable=false)
     */
    private $fechaAlta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_BAJA", type="date", nullable=true)
     */
    private $fechaBaja;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECCION", type="text", nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="MUNICIPIO", type="text", nullable=false)
     */
    private $municipio;

    /**
     * @var string
     *
     * @ORM\Column(name="PROVINCIA", type="text", nullable=false)
     */
    private $provincia;

    /**
     * @var integer
     *
     * @ORM\Column(name="TELEFONO", type="integer", nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="ESCOLARIDA", type="string", length=30, nullable=false)
     */
    private $escolarida;

    /**
     * @var string
     *
     * @ORM\Column(name="ESPECIALIDA", type="text", nullable=false)
     */
    private $especialida;

    /**
     * @var string
     *
     * @ORM\Column(name="CARGO_ACTUAL", type="text", nullable=false)
     */
    private $cargoActual;

    /**
     * @var string
     *
     * @ORM\Column(name="CATEG_OCUPADA", type="string", length=1, nullable=false)
     */
    private $categOcupada;

    /**
     * @var integer
     *
     * @ORM\Column(name="SALARIO", type="integer", nullable=false)
     */
    private $salario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_NACI", type="date", nullable=false)
     */
    private $fechaNaci;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADO_CIVIL", type="string", length=1, nullable=false)
     */
    private $estadoCivil;

    /**
     * @var integer
     *
     * @ORM\Column(name="NO_HIJOS", type="integer", nullable=false)
     */
    private $noHijos;

    /**
     * @var string
     *
     * @ORM\Column(name="LUGAR_NACIMIENTO", type="text", nullable=false)
     */
    private $lugarNacimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="EDAD", type="integer", nullable=false)
     */
    private $edad;

    /**
     * @var string
     *
     * @ORM\Column(name="IDIOMA", type="text", nullable=false)
     */
    private $idioma;

    /**
     * @var string
     *
     * @ORM\Column(name="COMPUTACION", type="string", length=2, nullable=false)
     */
    private $computacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="PISO", type="integer", nullable=false)
     */
    private $piso;

    /**
     * @var string
     *
     * @ORM\Column(name="FOTO_NOMBRE", type="string", length=30, nullable=true)
     */
    private $fotoNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="TARJETA_RELOJ", type="string", length=11, nullable=true)
     */
    private $tarjetaReloj;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO_OFICINA", type="string", length=10, nullable=true)
     */
    private $telefonoOficina;

    /**
     * @var string
     *
     * @ORM\Column(name="CUBICULO", type="string", length=20, nullable=true)
     */
    private $cubiculo;

    /**
     * @var string
     *
     * @ORM\Column(name="HORA_ENTRAD_SALID", type="string", length=255, nullable=true)
     */
    private $horaEntradSalid;



    /**
     * Set user
     *
     * @param string $user
     * @return Persona
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Persona
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
     * Set correo
     *
     * @param string $correo
     * @return Persona
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set passDominio
     *
     * @param string $passDominio
     * @return Persona
     */
    public function setPassDominio($passDominio)
    {
        $this->passDominio = $passDominio;

        return $this;
    }

    /**
     * Get passDominio
     *
     * @return string 
     */
    public function getPassDominio()
    {
        return $this->passDominio;
    }

    /**
     * Set noTarjeta
     *
     * @param integer $noTarjeta
     * @return Persona
     */
    public function setNoTarjeta($noTarjeta)
    {
        $this->noTarjeta = $noTarjeta;

        return $this;
    }

    /**
     * Get noTarjeta
     *
     * @return integer 
     */
    public function getNoTarjeta()
    {
        return $this->noTarjeta;
    }

    /**
     * Set areaNum
     *
     * @param integer $areaNum
     * @return Persona
     */
    public function setAreaNum($areaNum)
    {
        $this->areaNum = $areaNum;

        return $this;
    }

    /**
     * Get areaNum
     *
     * @return integer 
     */
    public function getAreaNum()
    {
        return $this->areaNum;
    }

    /**
     * Set area
     *
     * @param string $area
     * @return Persona
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set codigoDpto
     *
     * @param integer $codigoDpto
     * @return Persona
     */
    public function setCodigoDpto($codigoDpto)
    {
        $this->codigoDpto = $codigoDpto;

        return $this;
    }

    /**
     * Get codigoDpto
     *
     * @return integer 
     */
    public function getCodigoDpto()
    {
        return $this->codigoDpto;
    }

    /**
     * Set departamento
     *
     * @param string $departamento
     * @return Persona
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return string 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Get cIdentida
     *
     * @return string 
     */
    public function getCIdentida()
    {
        return $this->cIdentida;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return Persona
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return Persona
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime 
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set fechaBaja
     *
     * @param \DateTime $fechaBaja
     * @return Persona
     */
    public function setFechaBaja($fechaBaja)
    {
        $this->fechaBaja = $fechaBaja;

        return $this;
    }

    /**
     * Get fechaBaja
     *
     * @return \DateTime 
     */
    public function getFechaBaja()
    {
        return $this->fechaBaja;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Persona
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set municipio
     *
     * @param string $municipio
     * @return Persona
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return string 
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     * @return Persona
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     * @return Persona
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set escolarida
     *
     * @param string $escolarida
     * @return Persona
     */
    public function setEscolarida($escolarida)
    {
        $this->escolarida = $escolarida;

        return $this;
    }

    /**
     * Get escolarida
     *
     * @return string 
     */
    public function getEscolarida()
    {
        return $this->escolarida;
    }

    /**
     * Set especialida
     *
     * @param string $especialida
     * @return Persona
     */
    public function setEspecialida($especialida)
    {
        $this->especialida = $especialida;

        return $this;
    }

    /**
     * Get especialida
     *
     * @return string 
     */
    public function getEspecialida()
    {
        return $this->especialida;
    }

    /**
     * Set cargoActual
     *
     * @param string $cargoActual
     * @return Persona
     */
    public function setCargoActual($cargoActual)
    {
        $this->cargoActual = $cargoActual;

        return $this;
    }

    /**
     * Get cargoActual
     *
     * @return string 
     */
    public function getCargoActual()
    {
        return $this->cargoActual;
    }

    /**
     * Set categOcupada
     *
     * @param string $categOcupada
     * @return Persona
     */
    public function setCategOcupada($categOcupada)
    {
        $this->categOcupada = $categOcupada;

        return $this;
    }

    /**
     * Get categOcupada
     *
     * @return string 
     */
    public function getCategOcupada()
    {
        return $this->categOcupada;
    }

    /**
     * Set salario
     *
     * @param integer $salario
     * @return Persona
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get salario
     *
     * @return integer 
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set fechaNaci
     *
     * @param \DateTime $fechaNaci
     * @return Persona
     */
    public function setFechaNaci($fechaNaci)
    {
        $this->fechaNaci = $fechaNaci;

        return $this;
    }

    /**
     * Get fechaNaci
     *
     * @return \DateTime 
     */
    public function getFechaNaci()
    {
        return $this->fechaNaci;
    }

    /**
     * Set estadoCivil
     *
     * @param string $estadoCivil
     * @return Persona
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;

        return $this;
    }

    /**
     * Get estadoCivil
     *
     * @return string 
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * Set noHijos
     *
     * @param integer $noHijos
     * @return Persona
     */
    public function setNoHijos($noHijos)
    {
        $this->noHijos = $noHijos;

        return $this;
    }

    /**
     * Get noHijos
     *
     * @return integer 
     */
    public function getNoHijos()
    {
        return $this->noHijos;
    }

    /**
     * Set lugarNacimiento
     *
     * @param string $lugarNacimiento
     * @return Persona
     */
    public function setLugarNacimiento($lugarNacimiento)
    {
        $this->lugarNacimiento = $lugarNacimiento;

        return $this;
    }

    /**
     * Get lugarNacimiento
     *
     * @return string 
     */
    public function getLugarNacimiento()
    {
        return $this->lugarNacimiento;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     * @return Persona
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer 
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set idioma
     *
     * @param string $idioma
     * @return Persona
     */
    public function setIdioma($idioma)
    {
        $this->idioma = $idioma;

        return $this;
    }

    /**
     * Get idioma
     *
     * @return string 
     */
    public function getIdioma()
    {
        return $this->idioma;
    }

    /**
     * Set computacion
     *
     * @param string $computacion
     * @return Persona
     */
    public function setComputacion($computacion)
    {
        $this->computacion = $computacion;

        return $this;
    }

    /**
     * Get computacion
     *
     * @return string 
     */
    public function getComputacion()
    {
        return $this->computacion;
    }

    /**
     * Set piso
     *
     * @param integer $piso
     * @return Persona
     */
    public function setPiso($piso)
    {
        $this->piso = $piso;

        return $this;
    }

    /**
     * Get piso
     *
     * @return integer 
     */
    public function getPiso()
    {
        return $this->piso;
    }

    /**
     * Set fotoNombre
     *
     * @param string $fotoNombre
     * @return Persona
     */
    public function setFotoNombre($fotoNombre)
    {
        $this->fotoNombre = $fotoNombre;

        return $this;
    }

    /**
     * Get fotoNombre
     *
     * @return string 
     */
    public function getFotoNombre()
    {
        return $this->fotoNombre;
    }

    /**
     * Set tarjetaReloj
     *
     * @param string $tarjetaReloj
     * @return Persona
     */
    public function setTarjetaReloj($tarjetaReloj)
    {
        $this->tarjetaReloj = $tarjetaReloj;

        return $this;
    }

    /**
     * Get tarjetaReloj
     *
     * @return string 
     */
    public function getTarjetaReloj()
    {
        return $this->tarjetaReloj;
    }

    /**
     * Set telefonoOficina
     *
     * @param string $telefonoOficina
     * @return Persona
     */
    public function setTelefonoOficina($telefonoOficina)
    {
        $this->telefonoOficina = $telefonoOficina;

        return $this;
    }

    /**
     * Get telefonoOficina
     *
     * @return string 
     */
    public function getTelefonoOficina()
    {
        return $this->telefonoOficina;
    }

    /**
     * Set cubiculo
     *
     * @param string $cubiculo
     * @return Persona
     */
    public function setCubiculo($cubiculo)
    {
        $this->cubiculo = $cubiculo;

        return $this;
    }

    /**
     * Get cubiculo
     *
     * @return string 
     */
    public function getCubiculo()
    {
        return $this->cubiculo;
    }

    /**
     * Set horaEntradSalid
     *
     * @param string $horaEntradSalid
     * @return Persona
     */
    public function setHoraEntradSalid($horaEntradSalid)
    {
        $this->horaEntradSalid = $horaEntradSalid;

        return $this;
    }

    /**
     * Get horaEntradSalid
     *
     * @return string 
     */
    public function getHoraEntradSalid()
    {
        return $this->horaEntradSalid;
    }

    public function __toString()
    {
        return $this->nombre;
    }
}
