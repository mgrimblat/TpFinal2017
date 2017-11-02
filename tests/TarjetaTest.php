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
        $tarjeta->carga(50);
        $this->assertEquals($tarjeta->get_saldo(), 50.0);
    }
}

?>
