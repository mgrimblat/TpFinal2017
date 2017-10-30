<?php

class tarjeta{

  protected $saldo;
  protected $plus;    //precio de los boletos que adeuda
  protected $viajes;

  function __construct{

    $this->saldo = 0.0;
    $this->plus = 0.0;
  }

  public function carga($carga){

    if($carga == 332.0){
      $this->saldo += 388.0 - $this->plus;
    }
      else if ($carga == 624) {
        $this->saldo += 776.0 - $this->plus;
      }
        else{
          $this->saldo = $carga - $this->plus
        }
  }

  public function pagar_viaje(Transporte $transporte){

    if($transporte->tipo == "Colectivo"){

      $this->pagar_colectivo(Transporte $transporte);
      return;
    }
      else if($this->saldo >= 12.45){
        $this->saldo -= 12.45;
        $this->viajes[] = new viaje("Normal", $transporte->monto, $transporte->tipo);
      }
    }

    public function pagar_colectivo(Transporte $transporte){

      if ($this->saldo >= 9.7) {
        $this->saldo -= 9.7;
        $this->viajes[] = new viaje("Normal", $transporte->monto, $transporte->linea);
      }
        else if($this->plus < 19.4){
          $this->plus += 9.7;
        }
    }
}








 ?>
