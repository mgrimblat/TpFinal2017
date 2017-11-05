<?php

namespace TpFinal;

class tarjeta{

  protected $saldo;
  protected $plus;    //precio de los boletos que adeuda
  protected $viajes;
  protected $tipo;    // 0 = Normal, 1 = Medio, 2 = Libre

  function __construct(){

    $this->saldo = 0.0;
    $this->plus = 0.0;
    $this->tipo = 0;
    $this->viajes = array();
  }

  public function carga($carga){

    if($carga == 332.0){
      $this->saldo += 388.0 - $this->plus;
    }
      else if ($carga == 624) {
        $this->saldo += 776.0 - $this->plus;
      }
        else{
          $this->saldo = $carga - $this->plus;
        }
  }

  public function pagar_viaje(transporte $transporte, $fecha){

    if($transporte->get_tipo() == "Colectivo"){

      $this->pagar_colectivo($transporte, $fecha);
      return;
    }
      else if(strtotime($fecha) - end($this->viajes)->get_fecha() > 86400){
        if($this->saldo >= 12.45){
          $this->saldo -= 12.45;
          $this->viajes[] = new viaje(0, 12.45, $transporte->tipo, 0, strtotime($fecha));
        }
        else {
          echo "Saldo Insuficiente";
        }
      }
      else {
        $this->viajes[] = new viaje(0, 0.0, $transporte->tipo, 0, strtotime($fecha));
      }
    }

    protected function pagar_colectivo(transporte $transporte, $fecha){

      $monto = 9.7;
      $t = 0;   //transbordo



        if($this->saldo >= 2.91){
          $this->saldo = $this->saldo - 2.91;
          $this->viajes[] = new viaje(1, 2.91, "Colectivo", $transporte->get_linea(), strtotime($fecha));
          return;
        }
        if(end($this->viajes)->get_transbordo() == 0){
          if(strtotime($fecha) - end($this->viajes)->get_fecha() < 3600){
            if($transporte->get_linea() != end($this->viajes)->get_id()){

            }
          }
        }


      if($this->saldo >= 9.7){
        $this->saldo = $this->saldo - 9.7;
        $this->viajes[] = new viaje(0, 9.7, "Colectivo", $transporte->get_linea(), strtotime($fecha));
      }

    }
    
   public function get_saldo(){
     return $this->saldo;
    }
}

?>
