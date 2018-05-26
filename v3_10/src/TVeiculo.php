<?php

namespace br\ns\newssystems\NFe\struct;

class TVeiculo {

    public $placa;
    public $UF;
    public $RNTC;

    function getPlaca() {
        return $this->placa;
    }

    function getUF() {
        return $this->UF;
    }

    function getRNTC() {
        return $this->RNTC;
    }

    function setPlaca($placa) {
        $this->placa = $placa;
    }

    function setUF($UF) {
        $this->UF = $UF;
    }

    function setRNTC($RNTC) {
        $this->RNTC = $RNTC;
    }
}