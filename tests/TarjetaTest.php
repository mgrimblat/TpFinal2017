<?php

namespace TpFinal;

use PHPUnit\Framework\TestCase;

class TarjetaTest extends TestCase {


    public function test_SaldoCero() {
        $tarjeta = new tarjeta;
        $this->assertEquals($tarjeta->get_saldo(), 0.0);
    }
    
    public function test_cargar50() {
        $tarjeta = new tarjeta;
        $tarjeta->carga(50.0);
        $this->assertEquals($tarjeta->get_saldo(), 50.0);
    }
    
    public function test_cargar332() {
        $tarjeta = new tarjeta;
        $tarjeta->carga(332.0);
        $this->assertEquals($tarjeta->get_saldo(), 388.0);
    }
    
       public function test_Pagar1Viaje(){
        $tarjeta = new tarjeta;
        $tarjeta->carga(50);
        $colectivo = new colectivo("K", "Naranja");
        $tarjeta->pagar_viaje($colectivo, "02/11/2017 12:13");
        $this->assertEquals($tarjeta->get_saldo(), 50);
    }
    
    
}

?>
