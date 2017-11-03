<?php

namespace TpFinal;
class viaje{

 protected $transbordo;      // 0. falso 1. verdadero
 protected $monto;
 protected $transporte;
 protected $fecha;
 protected $id; // 0 si es una bici, si es un colectivo el nro. de linea

 function __construct($transbordo, $monto, $transporte, $id, $fecha){

  $this->transbordo = $transbordo;
  $this->monto = $monto;
  $this->transporte = $transporte;
  $this->fecha = $fecha;
  $this->id = $id;
 }

 function get_id(){
   return $this->id;
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
