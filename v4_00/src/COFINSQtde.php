<?php

namespace br\ns\newssystems\nfe\struct;

class COFINSQtde {

    public $CST;
    public $qBCProd;
    public $vAliqProd;
    public $vCOFINS;
    
    function getCST() {
        return $this->CST;
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
