<?php

  class viaje{

    protected $tipo;      //plus, normal, pase libre, etc.
    protected $monto;
    protected $transporte;

    function __construct($tipo, $monto, $transporte){

      $this->tipo = $tipo;
      $this->monto = $monto;
      $this->transporte = $transporte;
    }
  }

 ?>
