<?php
/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 16/05/15
 * Time: 20:15
 */

namespace ProyUser\ArchivoBibliotecaBundle\Entity\Archivo;


class Proyecto
{
    private $arrayProyectos;

    function __construct()
    {
        $fichero_dbf = str_ireplace("/web/app_dev.php", "", $_SERVER["SCRIPT_FILENAME"]);
        $fichero_dbf = str_ireplace("/web/app.php", "", $fichero_dbf);
        $fichero_dbf =  $fichero_dbf.'/src/ProyUser/ArchivoBibliotecaBundle/BaseDatosExt/Archivo/proyectos_archivo_arctec.DBF';
        $conex = dbase_open($fichero_dbf, 0);
        $arrayAux = array();
        $arrayResp = array();
        if($conex)
        {
            $total_registros = dbase_numrecords($conex);
            for ($i = 1; $i <= $total_registros; $i++)
            {
                $arrayAux[] = dbase_get_record_with_names($conex, $i);
                $arrayResp[] = array();
                $arrayResp[$i-1]["id_proyecto"] = trim($arrayAux[$i-1]["IDDOC"]);

                $arrayResp[$i-1]["nombre"] = $this->quitar_caracteres_especiales_cadena(trim($arrayAux[$i-1]["NOMBRE"]));
                $arrayResp[$i-1]["nombre_actual"] = $this->quitar_caracteres_especiales_cadena(trim($arrayAux[$i-1]["NOM_ACTU"]));;
                $arrayResp[$i-1]["nombre_proyectista"] = trim($arrayAux[$i-1]["PROYECTIS"]);
                $arrayResp[$i-1]["anno_proyecto"] = trim($arrayAux[$i-1]["ANO_PROY"]);
                $arrayResp[$i-1]["programa"] = trim($arrayAux[$i-1]["PROGRAMA"]);
                $arrayResp[$i-1]["sistema_construccion"] = trim($arrayAux[$i-1]["SISCONST"]);
                $arrayResp[$i-1]["especialidad"] = trim($arrayAux[$i-1]["ESPECIALID"]);
                $arrayResp[$i-1]["etapa"] = trim($arrayAux[$i-1]["ETAPA"]);
                $arrayResp[$i-1]["observacion"] = trim($arrayAux[$i-1]["OBSERVACIO"]);
                $arrayResp[$i-1]["cubiculo"] = trim($arrayAux[$i-1]["CUBICULO"]);
                $arrayResp[$i-1]["estante"] = trim($arrayAux[$i-1]["ESTANTE"]);
                $arrayResp[$i-1]["casilla"] = trim($arrayAux[$i-1]["CASILLA"]);
            }
        }
        dbase_close($conex);
        $this->arrayProyectos = $arrayResp;
    }

    

    public function getArrayProyectos()
    {
        return $this->arrayProyectos;
    }

    public function buscarProyectoID($id_proyecto)
    {
        $resp = false;
        for($i=0;$i<count($this->arrayProyectos) && $resp==false;$i++)
        {
            if($this->arrayProyectos[$i]["id_proyecto"]==$id_proyecto)
            {
                $resp = $this->arrayProyectos[$i];
            }
        }
        return $resp;
    }

    public function buscarPorParametros($arrayParametros)
    {
        $arrParamet = array();
        $arrResp = array();
        $encontro = true;
        for($i=0;$i<count($arrayParametros);$i++)
        {
            if(isset($arrayParametros[$i]['valor']))
            {
                $arrParamet[] = $arrayParametros[$i];
            }
        }
        if(count($arrParamet)== 0)
        {
            $arrResp = $this->arrayProyectos;
        }
        else
        {
            for($j=0;$j<count($this->arrayProyectos);$j++)
            {
                $encontro = true;
                for($q=0;$q<count($arrParamet) &&  $encontro == true;$q++)
                {
                    if(strstr(mb_strtolower($this->arrayProyectos[$j][$arrParamet[$q]['parametro']]), mb_strtolower($arrParamet[$q]['valor']))==false)
                    {
                        $encontro=false;
                    }
                }
                if($encontro==true)
                {
                    $arrResp[]=$this->arrayProyectos[$j];
                }
            }
        }
        if(count($arrResp)==0)
        {
            $arrResp = false;
        }
        return $arrResp;
    }

    function quitar_caracteres_especiales_cadena($cadena)
    {
        $arr = array('a8'=>'22','b4'=>'22');
        return hex2bin(strtr(bin2hex($cadena), $arr));
    }

} 