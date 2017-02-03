<?php

namespace br\ns\newssystems\NFe\struct;

class PISAliq {

    public $CST;
    public $vBC;
    public $pPIS;
    public $vPIS;

    function getCST() {
        return $this->CST;
    }

    function getvBC() {
        return $this->vBC;
    }

    function getpPIS() {
        return $this->pPIS;
    }

    function getvPIS() {
        return $this->vPIS;
    }

    function setCST($CST) {
        $this->CST = $CST;
    }

    function setvBC($vBC) {
        $this->vBC = $vBC;
    }

    function setpPIS($pPIS) {
        $this->pPIS = $pPIS;
    }

    function setvPIS($vPIS) {
        $this->vPIS = $vPIS;
    }
}