<?php
/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 5/05/15
 * Time: 21:31
 */

namespace ProyUser\UsuarioBundle\Entity;


class Dbase
{
  public function nueva()
  {
      if(true)
      {
          $fichero_dbf = 'C:/xampp/htdocs/ProyUser/src/ProyUser/UsuarioBundle/BaseDatosExt/fijos_a.DBF';
          $conex       = dbase_open($fichero_dbf, 0);
          if($conex)
          {
              $arrBDkey = array();
              $arrBD = array();
              $arrCumplesHoy = array();
              $total_registros = dbase_numrecords($conex);
              for ($i = 1; $i <= $total_registros; $i++)
              {
                  $arrBD[] = dbase_get_record($conex,$i);
                  $arrBDkey[] = dbase_get_record_with_names($conex, $i);
              }
              print_r($arrBDkey);
          }
          else
          {
              echo 'No se pudo acceder al fichero dbf';
          }
          dbase_close($conex);
          print_r($arrCumplesHoy);
      }
  }

} 