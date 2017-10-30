<?php

class tarjeta{

  protected $saldo;
  protected $plus;    //precio de los boletos que adeuda

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

  

}








 ?>
