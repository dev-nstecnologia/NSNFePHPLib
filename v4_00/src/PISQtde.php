<?php

namespace br\ns\newssystems\NFe\struct;

class PISQtde {

    public $CST;
    public $qBCProd;
    public $vAliqProd;
    public $vPIS;

    function getCST() {
        return $this->CST;
    }

    function getqBCProd() {
        return $this->qBCProd;
    }

    function getVAliqProd() {
        return $this->vAliqProd;
    }

    function getvPIS() {
        return $this->vPIS;
    }

    function setCST($CST) {
        $this->CST = $CST;
    }

    function setqBCProd($qBCProd) {
        $this->qBCProd = $qBCProd;
    }

    function setVAliqProd($vAliqProd) {
        $this->vAliqProd = $vAliqProd;
    }

    function setvPIS($vPIS) {
        $this->vPIS = $vPIS;
    }
    
}