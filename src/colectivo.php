<?php

namespace TpFinal;

class colectivo extends transporte{

    protected $linea;
    protected $empresa;

    function __construct($linea, $empresa){

      $this->linea = $linea;
      $this->empresa = $empresa;
      $this->monto = 9.70;
      $this->tipo = "Colectivo";
    }
    
    public function get_linea(){
        return $this->linea;
    }
    
    public function get_empresa(){
        return $this->empresa;
    }
}
?>
