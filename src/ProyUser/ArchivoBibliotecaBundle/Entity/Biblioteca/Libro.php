<?php
/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 9/05/15
 * Time: 12:56
 */

namespace ProyUser\ArchivoBibliotecaBundle\Entity\Biblioteca;


class Libro
{
   private $arrayLibros;

   function __construct()
   {
       $fichero_dbf = str_ireplace("/web/app_dev.php", "", $_SERVER["SCRIPT_FILENAME"]);
       $fichero_dbf = str_ireplace("/web/app.php", "", $fichero_dbf);
       $fichero_dbf =  $fichero_dbf.'/src/ProyUser/ArchivoBibliotecaBundle/BaseDatosExt/Biblioteca/libros_biblioteca_libros.DBF';
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
               $arrayResp[$i-1]["id_libro"] = trim($arrayAux[$i-1]["IDTITULO"]);

               $arrayResp[$i-1]["titulo"] = $this->quitar_caracteres_especiales_cadena(trim($arrayAux[$i-1]["TITULO"]));
               $arrayResp[$i-1]["apell_nombre_autor"] = trim($arrayAux[$i-1]["APENOM"]);
               $arrayResp[$i-1]["institucion"] = trim($arrayAux[$i-1]["INSTITUCIO"]);
               $arrayResp[$i-1]["nacion"] = trim($arrayAux[$i-1]["NACION"]);
               $arrayResp[$i-1]["idioma"] = trim($arrayAux[$i-1]["IDIOMA"]);
               $arrayResp[$i-1]["editorial"] = trim($arrayAux[$i-1]["EDITORIAL"]);
               $arrayResp[$i-1]["edicion"] = trim($arrayAux[$i-1]["EDICION"]);
               $arrayResp[$i-1]["frec"] = trim($arrayAux[$i-1]["FREC"]);
               $arrayResp[$i-1]["conservacion"] = trim($arrayAux[$i-1]["CONSERV"]);
               $arrayResp[$i-1]["categoria"] = trim($arrayAux[$i-1]["CATEG"]);
               $arrayResp[$i-1]["adqui"] = trim($arrayAux[$i-1]["ADQUI"]);
               $arrayResp[$i-1]["proveedor"] = trim($arrayAux[$i-1]["PROVEEDOR"]);
               $arrayResp[$i-1]["tema"] = trim($arrayAux[$i-1]["TEMA"]);
               $arrayResp[$i-1]["tipo_documento"] = trim($arrayAux[$i-1]["TIPDOC"]);
               $arrayResp[$i-1]["estante"] = trim($arrayAux[$i-1]["ESTANTE"]);
               $arrayResp[$i-1]["nivel"] = trim($arrayAux[$i-1]["NIVEL"]);
           }
       }
       dbase_close($conex);
       $this->arrayLibros = $arrayResp;
   }

   public function getArrayLibros()
   {
       return $this->arrayLibros;
   }

    public function buscarLibroID($id_libro)
    {
        $resp = false;
        for($i=0;$i<count($this->arrayLibros) && $resp==false;$i++)
        {
            if($this->arrayLibros[$i]["id_libro"]==$id_libro)
            {
                $resp = $this->arrayLibros[$i];
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
            $arrResp = $this->arrayLibros;
        }
        else
        {
            for($j=0;$j<count($this->arrayLibros);$j++)
            {
                $encontro = true;
                for($q=0;$q<count($arrParamet) &&  $encontro == true;$q++)
                {
                    if(strstr(mb_strtolower($this->arrayLibros[$j][$arrParamet[$q]['parametro']]), mb_strtolower($arrParamet[$q]['valor']))==false)
                    {
                        $encontro=false;
                    }
                }
                if($encontro==true)
                {
                    $arrResp[]=$this->arrayLibros[$j];
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