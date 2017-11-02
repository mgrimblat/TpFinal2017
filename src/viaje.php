<?php

namespace TpFinal;
class viaje{

 protected $transbordo;      // booleano
 protected $monto;
 protected $transporte;
 protected $fecha;

 function __construct($transbordo, $monto, $transporte, $fecha){

  $this->transbordo = transbordo;
  $this->monto = $monto;
  $this->transporte = $transporte;
  $this->fecha = $fecha;
 }

 function get_fecha(){
  return $this->fecha;
  }
 
 function get_monto(){
  return $this->monto;
  }
 
 function get_transporte(){
  return $this->transporte;
  }
 
 function get_transbordo(){
  return $this->transbordo;
  }
 
}

 ?>
