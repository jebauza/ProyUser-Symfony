<?php
/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 16/05/15
 * Time: 20:15
 */

namespace ProyUser\ArchivoBibliotecaBundle\Entity;


class Prestamos
{
    private $arrayPrestamos;

    function __construct()
    {

    }

    function buscarPrestamos($nombre)
    {
        $alerteProyecto = $this->buscarAlertaPrestamosProyecto($nombre);
        $arrResp = array();
        $NumAlertasyArrPrestamos = array('cantAlertas'=>0,'arrPrestamos'=>"");
        if(count($alerteProyecto)!=0)
        {
            $NumAlertasyArrPrestamos['cantAlertas'] = $NumAlertasyArrPrestamos['cantAlertas'] + count($alerteProyecto);
            foreach($alerteProyecto as $prestamo)
            {
                $arrResp[] = $prestamo;
            }
        }
        $alerteBiblioteca = $this->buscarAlertaPrestamosBiblioteca($nombre);
        if(count($alerteBiblioteca)!=0)
        {
            $NumAlertasyArrPrestamos['cantAlertas'] = $NumAlertasyArrPrestamos['cantAlertas'] + count($alerteBiblioteca);
            foreach($alerteBiblioteca as $prestamo)
            {
                $arrResp[] = $prestamo;
            }
        }
        $prestamosProyecto = $this->buscarPrestamosProyecto($nombre);
        if(count($prestamosProyecto)!=0)
        {
            foreach($prestamosProyecto as $prestamo)
            {
                $arrResp[] = $prestamo;
            }
        }
        $prestamosBiblioteca = $this->buscarPrestamosBiblioteca($nombre);
        if(count($prestamosBiblioteca)!=0)
        {
            foreach($prestamosBiblioteca as $prestamo)
            {
                $arrResp[] = $prestamo;
            }
        }
        if(count($arrResp)>0)
        {
            $NumAlertasyArrPrestamos['arrPrestamos'] = $arrResp;
            return $NumAlertasyArrPrestamos;
        }
        return false;
    }



    public function buscarAlertaPrestamosProyecto($nombre_user)
    {
        $arrayResp = array();
        $fichero_dbf = str_ireplace("/web/app_dev.php", "", $_SERVER["SCRIPT_FILENAME"]);
        $fichero_dbf = str_ireplace("/web/app.php", "", $fichero_dbf);
        $fichero_dbf =  $fichero_dbf.'/src/ProyUser/ArchivoBibliotecaBundle/BaseDatosExt/Archivo/alerta_prestamos_archivo_presaler1.dbf';
        $conex = dbase_open($fichero_dbf, 0);
        $arrayAux = array();
        if($conex)
        {
            $total_registros = dbase_numrecords($conex);
            for ($i = 1; $i <= $total_registros; $i++)
            {
                $arrayAux[] = dbase_get_record_with_names($conex, $i);
                if($this->sonSimilaresLosNombres($nombre_user, $this->quitar_caracteres_especiales_cadena(trim($arrayAux[$i-1]["USUARIO"]))))
                {
                    $arrayResp[] = array();
                    $arrayResp[count($arrayResp)-1]["id_prestamo_proyecto"] = trim($arrayAux[$i-1]["IDPRES"]);

                    $arrayResp[count($arrayResp)-1]["nombre_usuario"] = $this->quitar_caracteres_especiales_cadena(trim($arrayAux[$i-1]["USUARIO"]));
                    $arrayResp[count($arrayResp)-1]["area"] = trim($arrayAux[$i-1]["AREA"]);
                    if(trim($arrayAux[$i-1]["TITULO"]) != "")
                    {
                        $arrayResp[count($arrayResp)-1]["titulo_documento"] = $this->quitar_caracteres_especiales_cadena(trim($arrayAux[$i-1]["TITULO"]));
                    }
                    else
                    {
                        $arrayResp[count($arrayResp)-1]["titulo_documento"] = $this->quitar_caracteres_especiales_cadena(trim($arrayAux[$i-1]["TITULOLIB"]));
                    }
                    $arrayResp[count($arrayResp)-1]["tipo_documento"] = trim($arrayAux[$i-1]["TIPDOC"]);
                    if(trim($arrayAux[$i-1]["TIPDOC"]) == "")
                    {
                        $arrayResp[count($arrayResp)-1]["tipo_documento"] = "PROYECTO";
                    }
                    if(trim($arrayAux[$i-1]["TIPDOC"]) == "REVISTA")
                    {
                        $arrayResp[count($arrayResp)-1]["id_revista"] = trim($arrayAux[$i-1]["IDTITULO"]);
                        $arrayResp[count($arrayResp)-1]["no_revista"] = trim($arrayAux[$i-1]["NO"]);
                    }
                    else
                    {
                        $arrayResp[count($arrayResp)-1]["id_revista"] = "no";
                        $arrayResp[count($arrayResp)-1]["no_revista"] = "no";
                    }
                    $arrayResp[count($arrayResp)-1]["fecha_prestamos"] = trim($arrayAux[$i-1]["FECPRES"]);
                    $arrayResp[count($arrayResp)-1]["fecha_devolcion"] = trim($arrayAux[$i-1]["FECDEVO"]);
                    $arrayResp[count($arrayResp)-1]["dias_prestados"] = trim($arrayAux[$i-1]["DIAS_PRES"]);
                    $arrayResp[count($arrayResp)-1]["dias_transcuridos"] = trim($arrayAux[$i-1]["DIAS_TRANS"]);
                    $arrayResp[count($arrayResp)-1]["dias_pendientes"] = trim($arrayAux[$i-1]["DIAS_PTE"]);
                    if(trim($arrayAux[$i-1]["PRORRO"]) == 0)
                    {
                        $arrayResp[count($arrayResp)-1]["proroga"] = "no";
                    }
                    else
                    {
                        $arrayResp[count($arrayResp)-1]["proroga"] = "si";
                    }
                    if(trim($arrayAux[$i-1]["DEVUELTO"]) == 0)
                    {
                        $arrayResp[count($arrayResp)-1]["estado_prestamo"] = "activo";
                    }
                    else
                    {
                        $arrayResp[count($arrayResp)-1]["estado_prestamo"] = "entregado";
                    }
                    $arrayResp[count($arrayResp)-1]["observaciones"] = trim($arrayAux[$i-1]["OBSER"]);
                    $arrayResp[count($arrayResp)-1]["tabla"] = "prestamos_alerta_proyecto";
                }
            }
        }
        dbase_close($conex);
        $resp = array();
        for($j=count($arrayResp)-1;$j>-1;$j--)
        {
            $resp[]= $arrayResp[$j];
        }
        return $resp;
    }

    public function buscarAlertaPrestamosBiblioteca($nombre_user)
    {
        $arrayResp = array();
        $fichero_dbf = str_ireplace("/web/app_dev.php", "", $_SERVER["SCRIPT_FILENAME"]);
        $fichero_dbf = str_ireplace("/web/app.php", "", $fichero_dbf);
        $fichero_dbf =  $fichero_dbf.'/src/ProyUser/ArchivoBibliotecaBundle/BaseDatosExt/Biblioteca/alerta_prestamos_biblioteca_presaler.dbf';
        $conex = dbase_open($fichero_dbf, 0);
        $arrayAux = array();
        if($conex)
        {
            $total_registros = dbase_numrecords($conex);
            for ($i = 1; $i <= $total_registros; $i++)
            {
                $arrayAux[] = dbase_get_record_with_names($conex, $i);
                if($this->sonSimilaresLosNombres($nombre_user, $this->quitar_caracteres_especiales_cadena(trim($arrayAux[$i-1]["USUARIO"]))))
                {
                    $arrayResp[] = array();
                    $arrayResp[count($arrayResp)-1]["id_prestamo_proyecto"] = trim($arrayAux[$i-1]["IDPRES"]);

                    $arrayResp[count($arrayResp)-1]["nombre_usuario"] = $this->quitar_caracteres_especiales_cadena(trim($arrayAux[$i-1]["USUARIO"]));
                    $arrayResp[count($arrayResp)-1]["area"] = trim($arrayAux[$i-1]["AREA"]);
                    if(trim($arrayAux[$i-1]["TITULO"]) != "")
                    {
                        $arrayResp[count($arrayResp)-1]["titulo_documento"] = $this->quitar_caracteres_especiales_cadena(trim($arrayAux[$i-1]["TITULO"]));
                    }
                    else
                    {
                        $arrayResp[count($arrayResp)-1]["titulo_documento"] = $this->quitar_caracteres_especiales_cadena(trim($arrayAux[$i-1]["TITULOLIB"]));
                    }
                    $arrayResp[count($arrayResp)-1]["tipo_documento"] = trim($arrayAux[$i-1]["TIPDOC"]);
                    if(trim($arrayAux[$i-1]["TIPDOC"]) == "")
                    {
                        $arrayResp[count($arrayResp)-1]["tipo_documento"] = "PROYECTO";
                    }
                    if(trim($arrayAux[$i-1]["TIPDOC"]) == "REVISTA")
                    {
                        $arrayResp[count($arrayResp)-1]["id_revista"] = trim($arrayAux[$i-1]["IDTITULO"]);
                        $arrayResp[count($arrayResp)-1]["no_revista"] = trim($arrayAux[$i-1]["NO"]);
                    }
                    else
                    {
                        $arrayResp[count($arrayResp)-1]["id_revista"] = "no";
                        $arrayResp[count($arrayResp)-1]["no_revista"] = "no";
                    }
                    $arrayResp[count($arrayResp)-1]["fecha_prestamos"] = trim($arrayAux[$i-1]["FECPRES"]);
                    $arrayResp[count($arrayResp)-1]["fecha_devolcion"] = trim($arrayAux[$i-1]["FECDEVO"]);
                    $arrayResp[count($arrayResp)-1]["dias_prestados"] = trim($arrayAux[$i-1]["DIAS_PRES"]);
                    $arrayResp[count($arrayResp)-1]["dias_transcuridos"] = trim($arrayAux[$i-1]["DIAS_TRANS"]);
                    $arrayResp[count($arrayResp)-1]["dias_pendientes"] = trim($arrayAux[$i-1]["DIAS_PTE"]);
                    if(trim($arrayAux[$i-1]["PRORRO"]) == 0)
                    {
                        $arrayResp[count($arrayResp)-1]["proroga"] = "no";
                    }
                    else
                    {
                        $arrayResp[count($arrayResp)-1]["proroga"] = "si";
                    }
                    if(trim($arrayAux[$i-1]["DEVUELTO"]) == 0)
                    {
                        $arrayResp[count($arrayResp)-1]["estado_prestamo"] = "activo";
                    }
                    else
                    {
                        $arrayResp[count($arrayResp)-1]["estado_prestamo"] = "entregado";
                    }
                    $arrayResp[count($arrayResp)-1]["observaciones"] = trim($arrayAux[$i-1]["OBSER"]);
                    $arrayResp[count($arrayResp)-1]["tabla"] = "prestamos_alerta_biblioteca";
                }
            }
        }
        dbase_close($conex);
        $resp = array();
        for($j=count($arrayResp)-1;$j>-1;$j--)
        {
            $resp[]= $arrayResp[$j];
        }
        return $resp;
    }

    public function buscarPrestamosProyecto($nombre_user)
    {
        $arrayResp = array();
        $fichero_dbf = str_ireplace("/web/app_dev.php", "", $_SERVER["SCRIPT_FILENAME"]);
        $fichero_dbf = str_ireplace("/web/app.php", "", $fichero_dbf);
        $fichero_dbf =  $fichero_dbf.'/src/ProyUser/ArchivoBibliotecaBundle/BaseDatosExt/Archivo/proyecto_prestamos_bopreat1.dbf';
        $conex = dbase_open($fichero_dbf, 0);
        $arrayAux = array();
        if($conex)
        {
            $total_registros = dbase_numrecords($conex);
            for ($i = 1; $i <= $total_registros; $i++)
            {
                $arrayAux[] = dbase_get_record_with_names($conex, $i);
                if(trim($arrayAux[$i-1]["DEVUELTO"]) != 0 && $this->sonSimilaresLosNombres($nombre_user, trim($arrayAux[$i-1]["USUARIO"])))
                {
                    $arrayResp[] = array();
                    $arrayResp[count($arrayResp)-1]["id_prestamo_proyecto"] = trim($arrayAux[$i-1]["IDPRES"]);

                    $arrayResp[count($arrayResp)-1]["nombre_usuario"] = $this->quitar_caracteres_especiales_cadena(trim($arrayAux[$i-1]["USUARIO"]));
                    $arrayResp[count($arrayResp)-1]["area"] = trim($arrayAux[$i-1]["AREA"]);
                    if(trim($arrayAux[$i-1]["TITULO"]) != "")
                    {
                        $arrayResp[count($arrayResp)-1]["titulo_documento"] = $this->quitar_caracteres_especiales_cadena(trim($arrayAux[$i-1]["TITULO"]));
                    }
                    else
                    {
                        $arrayResp[count($arrayResp)-1]["titulo_documento"] = $this->quitar_caracteres_especiales_cadena(trim($arrayAux[$i-1]["TITULOLIB"]));
                    }
                    $arrayResp[count($arrayResp)-1]["tipo_documento"] = trim($arrayAux[$i-1]["TIPDOC"]);
                    if(trim($arrayAux[$i-1]["TIPDOC"]) == "")
                    {
                        $arrayResp[count($arrayResp)-1]["tipo_documento"] = "PROYECTO";
                    }
                    if(trim($arrayAux[$i-1]["TIPDOC"]) == "REVISTA")
                    {
                        $arrayResp[count($arrayResp)-1]["id_revista"] = trim($arrayAux[$i-1]["IDTITULO"]);
                        $arrayResp[count($arrayResp)-1]["no_revista"] = trim($arrayAux[$i-1]["NO"]);
                    }
                    else
                    {
                        $arrayResp[count($arrayResp)-1]["id_revista"] = "no";
                        $arrayResp[count($arrayResp)-1]["no_revista"] = "no";
                    }
                    $arrayResp[count($arrayResp)-1]["fecha_prestamos"] = trim($arrayAux[$i-1]["FECPRES"]);
                    $arrayResp[count($arrayResp)-1]["fecha_devolcion"] = trim($arrayAux[$i-1]["FECDEVO"]);
                    $arrayResp[count($arrayResp)-1]["dias_prestados"] = trim($arrayAux[$i-1]["DIAS_PRES"]);
                    $arrayResp[count($arrayResp)-1]["dias_transcuridos"] = trim($arrayAux[$i-1]["DIAS_TRANS"]);
                    $arrayResp[count($arrayResp)-1]["dias_pendientes"] = trim($arrayAux[$i-1]["DIAS_PTE"]);
                    if(trim($arrayAux[$i-1]["PRORRO"]) == 0)
                    {
                        $arrayResp[count($arrayResp)-1]["proroga"] = "no";
                    }
                    else
                    {
                        $arrayResp[count($arrayResp)-1]["proroga"] = "si";
                    }
                    if(trim($arrayAux[$i-1]["DEVUELTO"]) == 0)
                    {
                        $arrayResp[count($arrayResp)-1]["estado_prestamo"] = "activo";
                    }
                    else
                    {
                        $arrayResp[count($arrayResp)-1]["estado_prestamo"] = "entregado";
                    }
                    $arrayResp[count($arrayResp)-1]["observaciones"] = trim($arrayAux[$i-1]["OBSER"]);
                    $arrayResp[count($arrayResp)-1]["tabla"] = "prestamos_proyecto";

                }
            }
        }
        dbase_close($conex);
        $resp = array();
        for($j=count($arrayResp)-1;$j>-1;$j--)
        {
            $resp[]= $arrayResp[$j];
        }
        return $resp;
    }

    public function buscarPrestamosBiblioteca($nombre_user)
    {
        $arrayResp = array();
        $fichero_dbf = str_ireplace("/web/app_dev.php", "", $_SERVER["SCRIPT_FILENAME"]);
        $fichero_dbf = str_ireplace("/web/app.php", "", $fichero_dbf);
        $fichero_dbf =  $fichero_dbf.'/src/ProyUser/ArchivoBibliotecaBundle/BaseDatosExt/Biblioteca/libro_prestamos_presrev1.dbf';
        $conex = dbase_open($fichero_dbf, 0);
        $arrayAux = array();
        if($conex)
        {
            $total_registros = dbase_numrecords($conex);
            for ($i = 1; $i <= $total_registros; $i++)
            {
                $arrayAux[] = dbase_get_record_with_names($conex, $i);
                if(trim($arrayAux[$i-1]["DEVUELTO"]) != 0 && $this->sonSimilaresLosNombres($nombre_user, $this->quitar_caracteres_especiales_cadena(trim($arrayAux[$i-1]["USUARIO"]))))
                {
                    $arrayResp[] = array();
                    $arrayResp[count($arrayResp)-1]["id_prestamo_proyecto"] = trim($arrayAux[$i-1]["IDPRES"]);

                    $arrayResp[count($arrayResp)-1]["nombre_usuario"] = $this->quitar_caracteres_especiales_cadena(trim($arrayAux[$i-1]["USUARIO"]));
                    $arrayResp[count($arrayResp)-1]["area"] = trim($arrayAux[$i-1]["AREA"]);
                    if(trim($arrayAux[$i-1]["TITULO"]) != "")
                    {
                        $arrayResp[count($arrayResp)-1]["titulo_documento"] = $this->quitar_caracteres_especiales_cadena(trim($arrayAux[$i-1]["TITULO"]));
                    }
                    else
                    {
                        $arrayResp[count($arrayResp)-1]["titulo_documento"] = $this->quitar_caracteres_especiales_cadena(trim($arrayAux[$i-1]["TITULOLIB"]));
                    }
                    $arrayResp[count($arrayResp)-1]["tipo_documento"] = trim($arrayAux[$i-1]["TIPDOC"]);
                    if(trim($arrayAux[$i-1]["TIPDOC"]) == "")
                    {
                        $arrayResp[count($arrayResp)-1]["tipo_documento"] = "PROYECTO";
                    }
                    if(trim($arrayAux[$i-1]["TIPDOC"]) == "REVISTA")
                    {
                        $arrayResp[count($arrayResp)-1]["id_revista"] = trim($arrayAux[$i-1]["IDTITULO"]);
                        $arrayResp[count($arrayResp)-1]["no_revista"] = trim($arrayAux[$i-1]["NO"]);
                    }
                    else
                    {
                        $arrayResp[count($arrayResp)-1]["id_revista"] = "no";
                        $arrayResp[count($arrayResp)-1]["no_revista"] = "no";
                    }
                    $arrayResp[count($arrayResp)-1]["fecha_prestamos"] = trim($arrayAux[$i-1]["FECPRES"]);
                    $arrayResp[count($arrayResp)-1]["fecha_devolcion"] = trim($arrayAux[$i-1]["FECDEVO"]);
                    $arrayResp[count($arrayResp)-1]["dias_prestados"] = trim($arrayAux[$i-1]["DIAS_PRES"]);
                    $arrayResp[count($arrayResp)-1]["dias_transcuridos"] = trim($arrayAux[$i-1]["DIAS_TRANS"]);
                    $arrayResp[count($arrayResp)-1]["dias_pendientes"] = trim($arrayAux[$i-1]["DIAS_PTE"]);
                    if(trim($arrayAux[$i-1]["PRORRO"]) == 0)
                    {
                        $arrayResp[count($arrayResp)-1]["proroga"] = "no";
                    }
                    else
                    {
                        $arrayResp[count($arrayResp)-1]["proroga"] = "si";
                    }
                    if(trim($arrayAux[$i-1]["DEVUELTO"]) == 0)
                    {
                        $arrayResp[count($arrayResp)-1]["estado_prestamo"] = "activo";
                    }
                    else
                    {
                        $arrayResp[count($arrayResp)-1]["estado_prestamo"] = "entregado";
                    }
                    $arrayResp[count($arrayResp)-1]["observaciones"] = trim($arrayAux[$i-1]["OBSER"]);
                    $arrayResp[count($arrayResp)-1]["tabla"] = "prestamos_biblioteca";
                }
            }
        }
        dbase_close($conex);
        $resp = array();
        for($j=count($arrayResp)-1;$j>-1;$j--)
        {
            $resp[]= $arrayResp[$j];
        }
        return $resp;
    }



    function sonSimilaresLosNombres($nom_Web, $nom_userPrest)
    {
        $resp = false;
        $nombre_userWeb = strtolower($nom_Web);
        $nombre_userPrestamo = strtolower($nom_userPrest);
        $arrNombWeb = explode(" ",$nombre_userWeb);
        $arrNombPrestamo = explode(" ",$nombre_userPrestamo);
        $nivelDescordancia = count($arrNombPrestamo);
        for($j=0;$j<count($arrNombPrestamo);$j++)
        {
            $terminar = false;
            for($i=0;$i<count($arrNombWeb) && $terminar == false;$i++)
            {
                if(strcasecmp($arrNombPrestamo[$j] , $arrNombWeb[$i]) == 0)
                {
                    $nivelDescordancia--;
                    $arrNombWeb[$i]= "";
                    $arrNombWeb = explode(" ",implode(" ",$arrNombWeb));
                    $terminar = true;
                }
                else
                {
                    $longitud = strlen($arrNombPrestamo[$j]);
                    if($longitud> 4)
                    {
                        $nivelAcetable = $longitud - round($longitud/4);
                        if(similar_text($arrNombPrestamo[$j] , $arrNombWeb[$i])>= $nivelAcetable)
                        {
                            $nivelDescordancia--;
                            $arrNombWeb[$i]= "";
                            $arrNombWeb = explode(" ",implode(" ",$arrNombWeb));
                            $terminar = true;
                        }
                    }

                }
            }
        }
        if($nivelDescordancia <= count($arrNombPrestamo)-(floor(count($arrNombPrestamo)/2)+1) )
        {
            $resp = true;
        }
        return $resp;
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