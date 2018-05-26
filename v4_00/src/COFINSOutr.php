<?php

namespace br\ns\newssystems\nfe\struct;

class COFINSOutr {

    public $CST;
    public $vBC;
    public $pCOFINS;
    public $qBCProd;
    public $vAliqProd;
    public $vCOFINS;
    
    function getCST() {
        return $this->CST;
    }

    function getvBC() {
        return $this->vBC;
    }

    function getpCOFINS() {
        return $this->pCOFINS;
    }

    function getqBCProd() {
        return $this->qBCProd;
    }

    function getVAliqProd() {
        return $this->vAliqProd;
    }

    function getvCOFINS() {
        return $this->vCOFINS;
    }

    function setCST($CST) {
        $this->CST = $CST;
    }

    function setvBC($vBC) {
        $this->vBC = $vBC;
    }

    function setpCOFINS($pCOFINS) {
        $this->pCOFINS = $pCOFINS;
    }

    function setqBCProd($qBCProd) {
        $this->qBCProd = $qBCProd;
    }

    function setVAliqProd($vAliqProd) {
        $this->vAliqProd = $vAliqProd;
    }

    function setvCOFINS($vCOFINS) {
        $this->vCOFINS = $vCOFINS;
    }


}
