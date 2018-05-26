<?php

namespace br\ns\newssystems\NFe\struct;

class PISOutr {

    public $CST;
    public $vBC;
    public $pPIS;
    public $qBCProd;
    public $vAliqProd;
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

    function setvBC($vBC) {
        $this->vBC = $vBC;
    }

    function setpPIS($pPIS) {
        $this->pPIS = $pPIS;
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