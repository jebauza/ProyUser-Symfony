<?php
/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 16/05/15
 * Time: 19:15
 */

namespace ProyUser\ArchivoBibliotecaBundle\Entity\Biblioteca;


class Revista
{
    private $arrayRevistas;

    function __construct()
    {
        $fichero_dbf = str_ireplace("/web/app_dev.php", "", $_SERVER["SCRIPT_FILENAME"]);
        $fichero_dbf = str_ireplace("/web/app.php", "", $fichero_dbf);
        $fichero_dbf =  $fichero_dbf.'/src/ProyUser/ArchivoBibliotecaBundle/BaseDatosExt/Biblioteca/revistas_biblioteca_revistas.DBF';
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
                $arrayResp[$i-1]["id_revista"] = trim($arrayAux[$i-1]["IDTITULO"]);

                $arrayResp[$i-1]["titulo"] = trim($arrayAux[$i-1]["TITULO"]);
                $arrayResp[$i-1]["apell_nombre_autor"] = trim($arrayAux[$i-1]["APENOM"]);
                $arrayResp[$i-1]["institucion"] = trim($arrayAux[$i-1]["INSTITUCIO"]);
                $arrayResp[$i-1]["nacion"] = trim($arrayAux[$i-1]["NACION"]);
                $arrayResp[$i-1]["idioma"] = trim($arrayAux[$i-1]["IDIOMA"]);
                $arrayResp[$i-1]["editorial"] = trim($arrayAux[$i-1]["EDITORIAL"]);
                $arrayResp[$i-1]["edicion"] = trim($arrayAux[$i-1]["EDICION"]);
                $arrayResp[$i-1]["frecuencia"] = trim($arrayAux[$i-1]["FREC"]);
                $arrayResp[$i-1]["conservacion"] = trim($arrayAux[$i-1]["CONSERV"]);
                $arrayResp[$i-1]["categoria"] = trim($arrayAux[$i-1]["CATEG"]);
                $arrayResp[$i-1]["adqui"] = trim($arrayAux[$i-1]["ADQUI"]);
                $arrayResp[$i-1]["proveedor"] = trim($arrayAux[$i-1]["PROVEEDOR"]);
                $arrayResp[$i-1]["tema"] = trim($arrayAux[$i-1]["TEMA"]);
                $arrayResp[$i-1]["tipo_documento"] = trim($arrayAux[$i-1]["TIPDOC"]);
                $arrayResp[$i-1]["estante"] = trim($arrayAux[$i-1]["ESTANTE"]);
                $arrayResp[$i-1]["nivel"] = trim($arrayAux[$i-1]["NIVEL"]);

                $arrayResp[$i-1]["numero"] = trim($arrayAux[$i-1]["NO"]);
                $arrayResp[$i-1]["mes_otro"] = trim($arrayAux[$i-1]["MES_OTRO"]);
                $arrayResp[$i-1]["anno"] = trim($arrayAux[$i-1]["ANO"]);

            }
        }
        dbase_close($conex);
        $this->arrayRevistas = $arrayResp;
    }

    public function getArrayRevistas()
    {
        return $this->arrayRevistas;
    }

    public function buscarRevistaID($id_revista)
    {
        $resp = false;
        for($i=0;$i<count($this->arrayRevistas) && $resp==false;$i++)
        {
            if($this->arrayRevistas[$i]["id_revista"]==$id_revista)
            {
                $resp = $this->arrayRevistas[$i];
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
            $arrResp = $this->arrayRevistas;
        }
        else
        {
            for($j=0;$j<count($this->arrayRevistas);$j++)
            {
                $encontro = true;
                for($q=0;$q<count($arrParamet) &&  $encontro == true;$q++)
                {
                    if(strstr(mb_strtolower($this->arrayRevistas[$j][$arrParamet[$q]['parametro']]), mb_strtolower($arrParamet[$q]['valor']))==false)
                    {
                        $encontro=false;
                    }
                }
                if($encontro==true)
                {
                    $arrResp[]=$this->arrayRevistas[$j];
                }
            }
        }
        if(count($arrResp)==0)
        {
            $arrResp = false;
        }
        return $arrResp;
    }

}