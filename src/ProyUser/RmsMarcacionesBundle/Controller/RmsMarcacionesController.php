<?php

namespace ProyUser\RmsMarcacionesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use ProyUser\UsuarioBundle\Entity\Persona;
use ProyUser\RmsMarcacionesBundle\Entity\RmsAccess;

use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class RmsMarcacionesController extends Controller
{
    public function principalAction()
    {
        $targetaReloj = $this->get('security.context')->getToken()->getUser()->getTarjetaReloj();
        $annoMes = date("Y").date("m");
        return $this->render('RmsMarcacionesBundle:Default:calendario.html.twig', $this->buscarCalendarioAction($annoMes,$targetaReloj));
    }

    public function busquedaPorMesAnnoAction()
    {
        $peticion = $this->getRequest();
        $targetaReloj = $this->get('security.context')->getToken()->getUser()->getTarjetaReloj();
        if ($peticion->getMethod() == 'POST')
        {
            $annoMes=$peticion->get('_anno').$peticion->get('_mes');
            return $this->render('RmsMarcacionesBundle:Default:calendario.html.twig', $this->buscarCalendarioAction($annoMes,$targetaReloj));
        }
        else
        {
            $annoMes = date("Y").date("m");
            return $this->render('RmsMarcacionesBundle:Default:calendario.html.twig', $this->buscarCalendarioAction($annoMes,$targetaReloj));
        }
    }




    public function buscarCalendarioAction($annoMes,$targetaRMS)
    {
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre" );
        $arrDiasFeriados = array('0101'=>true,'0102'=>true,'0501'=>true,'0725'=>true,'0726'=>true,'0727'=>true,'1010'=>true,'1225'=>true,'1231'=>true);
        $ClassRMS = new RmsAccess();
        $marcacionesPersonal = $ClassRMS->buscar_marcaciones_tarjRmsYmes($targetaRMS,$annoMes);
        $cantDiasMes = date("t",mktime(0, 0, 0, substr($annoMes,4,2), 1, substr($annoMes,0,4)));
        $diaSemanaPrimerDiaDelMes = date("N",mktime(0, 0, 0, substr($annoMes,4,2), 1, substr($annoMes,0,4)));
        $arrDatosAnnoMes = array('anno'=>substr($annoMes,0,4),'mes'=>array('numero'=>substr($annoMes,4,2),'nombre'=>$meses[substr($annoMes,4,2)-1]),'codigo'=>$annoMes,'cant_dias_mes'=>$cantDiasMes,'diaSemanaPrimerDiaDelMes'=>$diaSemanaPrimerDiaDelMes);
        $arrMarcPorFecha = null;
        $arrDatosInformativos = array();
        $arrDatosInformativos['dias_trabajados'] = 0;
        $arrDatosInformativos['Viatico_cobrar'] = 0;
        $arrDatosInformativos['Impuntualidades'] = 0;
        if(count($marcacionesPersonal)>0)
        {
            $arrMarcPorFecha = array();
            for($i=0;$i<count($marcacionesPersonal);$i++)
            {

                //AQUI CONVIERTO LA MARCACION A FORMATO AM O PM
                if($marcacionesPersonal[$i]['t_card'] >= 120000)
                {
                    $h = substr($marcacionesPersonal[$i]['t_card'],0,4)." pm";
                    if(substr($marcacionesPersonal[$i]['t_card'],0,4)>=1300)
                    {
                        $h = (substr($h,0,4)-1200)." pm";
                        $hora = substr_replace($h, ':', -5, 0);
                    }
                    $hora = substr_replace($h, ':', -5, 0);
                }
                else
                {
                    $h = (substr($marcacionesPersonal[$i]['t_card'],0,4)-0)." am";
                    $hora = substr_replace($h, ':', -5, 0);
                }

                //AQUI AGREGO EN EL ARREGLO CON EL PREFEJI DEL DIA ej(20150401) LA INFORMACION DE ESE DIA ES DECIR AL CONVOCAR ESE DIA VA A CONTENER VARIOS ARREGLOS DE INFORMACION POR CADA MARCACION DED ESE DIA
                if(isset($arrMarcPorFecha[$marcacionesPersonal[$i]['d_card']]))
                {
                    $arrMarcPorFecha[$marcacionesPersonal[$i]['d_card']]['marcaciones'][] = array('hora'=>$hora, 't_card'=>$marcacionesPersonal[$i]['t_card']);
                }
                else
                {
                    $arrMarcPorFecha[$marcacionesPersonal[$i]['d_card']] = array();
                    $arrMarcPorFecha[$marcacionesPersonal[$i]['d_card']]['marcaciones'][] = array('hora'=>$hora,'t_card'=>$marcacionesPersonal[$i]['t_card']);
                }
            }
            $arrDatosInformativos['dias_trabajados'] = count($arrMarcPorFecha);
            $arrDatosInformativos['Viatico_cobrar'] = $arrDatosInformativos['dias_trabajados']*0.6;
        }

        $arrDatosInformativos['dias_laborables']=0;
        $arrDatosInformativos['dias_feriados']=0;
        $arrDatosInformativos['ausencias']=0;
        for($n=1;$n<=$cantDiasMes;$n++)
        {
            $diaMktime=mktime(0, 0, 0, substr($annoMes,4,2), $n, substr($annoMes,0,4));
            switch($diaMktime)
            {
                //TIENE MARCACIONES EN ESE DIA
                case isset($arrMarcPorFecha[date("Ymd",$diaMktime)]):
                    if(empty($arrMarcPorFecha[date("Ymd",$diaMktime)]['tipoCasilla']))
                    {
                        $arrMarcPorFecha[date("Ymd",$diaMktime)]['tipoCasilla']="conMarcacionesOK";
                        $horarioUser_Ent_Sal = array('entrada'=>73059,'salida'=>170000);
                        if($this->get('security.context')->getToken()->getUser()->getHoraEntradSalid()!= null)
                        {
                            $horaEnSa = explode("-",$this->get('security.context')->getToken()->getUser()->getHoraEntradSalid());
                            $horarioUser_Ent_Sal['entrada'] = substr($horaEnSa[0],0,1).substr($horaEnSa[0],2,2)."59";
                            $horarioUser_Ent_Sal['salida'] = substr($horaEnSa[1],0,1).substr($horaEnSa[1],2,2)."00" + 120000;
                        }
                        if($arrMarcPorFecha[date("Ymd",$diaMktime)]['marcaciones'][0]['t_card'] > $horarioUser_Ent_Sal['entrada'] && (($arrMarcPorFecha[date("Ymd",$diaMktime)]['marcaciones'][0]['t_card'] < $horarioUser_Ent_Sal['salida'] && date("N",$diaMktime)<5) || ($arrMarcPorFecha[date("Ymd",$diaMktime)]['marcaciones'][0]['t_card'] < $horarioUser_Ent_Sal['salida']-10000 && date("N",$diaMktime)==5)))
                        {
                            $arrMarcPorFecha[date("Ymd",$diaMktime)]['tipoCasilla']="conMarcacionesERROR";
                            $arrDatosInformativos['Impuntualidades']++;
                        }
                        else
                        {
                            if($arrMarcPorFecha[date("Ymd",$diaMktime)]['marcaciones'][count($arrMarcPorFecha[date("Ymd",$diaMktime)]['marcaciones'])-1]['t_card'] > $horarioUser_Ent_Sal['entrada'] && (($arrMarcPorFecha[date("Ymd",$diaMktime)]['marcaciones'][count($arrMarcPorFecha[date("Ymd",$diaMktime)]['marcaciones'])-1]['t_card'] < $horarioUser_Ent_Sal['salida'] && date("N",$diaMktime)<5) || ($arrMarcPorFecha[date("Ymd",$diaMktime)]['marcaciones'][count($arrMarcPorFecha[date("Ymd",$diaMktime)]['marcaciones'])-1]['t_card'] < $horarioUser_Ent_Sal['salida']-10000 && date("N",$diaMktime)==5)))
                            {
                                $arrMarcPorFecha[date("Ymd",$diaMktime)]['tipoCasilla']="conMarcacionesERROR";
                                $arrDatosInformativos['Impuntualidades']++;
                            }
                            else
                            {
                                $horas = $arrMarcPorFecha[date("Ymd",$diaMktime)]['marcaciones'][count($arrMarcPorFecha[date("Ymd",$diaMktime)]['marcaciones'])-1]['t_card']-$arrMarcPorFecha[date("Ymd",$diaMktime)]['marcaciones'][0]['t_card'];
                                if(($horas<96941 && date("N",$diaMktime)<5) || $horas<86941)
                                {
                                    $arrMarcPorFecha[date("Ymd",$diaMktime)]['tipoCasilla']="conMarcacionesERROR";
                                    $arrDatosInformativos['Impuntualidades']++;
                                }
                            }
                        }
                    }
                    break;

                //ES UN SABADO O DOMINGO
                case date("N",$diaMktime)==7||date("N",$diaMktime)==6:
                    $arrMarcPorFecha[date("Ymd",$diaMktime)] = array();
                    $arrMarcPorFecha[date("Ymd",$diaMktime)]['tipoCasilla']="sabado_domingo";
                    break;

                //DIA FERIADO
                case isset($arrDiasFeriados[date("md",$diaMktime)]):
                    $arrMarcPorFecha[date("Ymd",$diaMktime)] = array();
                    $arrMarcPorFecha[date("Ymd",$diaMktime)]['tipoCasilla']="feriado";
                    $arrDatosInformativos['dias_laborables']--;
                    $arrDatosInformativos['dias_feriados']++;
                    break;

                //AUSENCIA
                case empty($arrMarcPorFecha[date("Ymd",$diaMktime)])&& date("Ymd")>date("Ymd",$diaMktime):
                    $arrMarcPorFecha[date("Ymd",$diaMktime)] = array();
                    $arrMarcPorFecha[date("Ymd",$diaMktime)]['tipoCasilla']="ausencia";
                    $arrDatosInformativos['ausencias']++;
                    break;
            }
            if(date("N",$diaMktime)<6)
            {
                $arrDatosInformativos['dias_laborables']++;
            }
        }
        $fechaIniMarcado = $ClassRMS->fechaIniMarcado($targetaRMS);
        $arrDatosInformativos['datosAnnoMarcacion']= $this->buscarArrAnnoAction($fechaIniMarcado,$annoMes);
        $arrResp = array('arrMarcPorFecha'=>$arrMarcPorFecha,'arrDatosInformativos'=>$arrDatosInformativos,'arrDatosAnnoMes'=>$arrDatosAnnoMes);
        return $arrResp;
    }

    public function buscarArrAnnoAction($fechaIniMarcacion,$annoMes)
    {
       $mesIniMarcaciones = substr($fechaIniMarcacion,4,2);
       $mesIniMarcaciones =  $mesIniMarcaciones*1;
       $mes_inicial = 1;
       $mes_final = 12;
       $annoEscojido = substr($annoMes,0,4);
       switch($annoEscojido)
       {
           case $annoEscojido==substr($fechaIniMarcacion,0,4):
               $mes_inicial = substr($fechaIniMarcacion,4,2)*1;
               break;

           case $annoEscojido==date("Y"):
               $mes_final = date("n");
               break;
       }
       $arrResp = array('annoEscojido'=>substr($annoMes,0,4),'mesEscojido'=>substr($annoMes,4,2)*1,'meses'=>array('ini'=>$mes_inicial,'fin'=>$mes_final),'annoIni'=>substr($fechaIniMarcacion,0,4),'textoPeriodoMarcaciones'=>$this->textoPeriodoMarcacionesAction(substr($fechaIniMarcacion,0,4),$mesIniMarcaciones,date("Y"),date("n")));
       return $arrResp;
    }

    public function textoPeriodoMarcacionesAction($annoIniMarcaciones,$mesIniMarcaciones,$annoFin,$mesFin)
    {
        $resp = "";
        for($i=$annoIniMarcaciones;$i<=$annoFin;$i++)
        {
            if($i==$annoIniMarcaciones)
            {
                $resp=$resp.$i."-$mesIniMarcaciones-12";
            }
            else
            {
                if($i==date("Y"))
                {
                    $resp="$resp/$i-1-".date("n");
                }
                else
                {
                    $resp="$resp/$i-1-12";
                }
            }
        }
        return $resp;
    }
}
