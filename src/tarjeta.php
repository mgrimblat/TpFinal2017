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
          $this->viajes[] = new viaje(false, 12.45, $transporte->tipo, strtotime($fecha));
        }
        else {
          echo "Saldo Insuficiente";
        }
      }
      else {
        $this->viajes[] = new viaje(false, 0.0, $transporte->tipo, strtotime($fecha));
      }
    }

    protected function pagar_colectivo(transporte $transporte, $fecha){

      if($this->tipo == 2){
        $this->viajes = new viaje(false, 0.0, $transporte->tipo, strtotime($fecha));
      }
      else {


      $t = false;  //transbordo
      
      if(end($this->viajes)->get_transporte() != $transporte){
        if( strtotime($fecha) - end($this->viajes)->get_fecha() < 3600 ){
         if(end($this->viajes)->get_transbordo() == false){
          $t = true;
         } 
        }
       }
        
      $monto = 9.7;

      if($t){
        $monto = $monto * 0.3;
      }

      if($this->tipo == 1){
        $monto = $monto / 2.0;
      }

      if($this->saldo < $monto){
        if($this->plus < 19.4) {
          $this->plus += 9.7;
          $this->viajes[] = new viaje(false, 9.7, $transporte->tipo, strtotime($fecha));
        }
      }

      else {
        $this->saldo -= $monto;
        if($t){
          $this->viajes[] = new viaje(true, $transporte->monto, $transporte->tipo, strtotime($fecha));
        }
        else {
          $this->viajes[] = new viaje(false, $transporte->monto, $transporte->tipo, strtotime($fecha));
        }
      }
    }
  }
  
   public function get_saldo(){
     return $this->saldo;
    }
}

?>
