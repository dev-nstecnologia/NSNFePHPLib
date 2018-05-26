<?php

namespace br\ns\newssystems\nfe\struct;

class CIDE {

    public $qBCProd;
    public $vAliqProd;
    public $vCIDE;
    
    function getqBCProd() {
        return $this->qBCProd;
    }

    function getVAliqProd() {
        return $this->vAliqProd;
    }

    function getvCIDE() {
        return $this->vCIDE;
    }

    function setqBCProd($qBCProd) {
        $this->qBCProd = $qBCProd;
    }

    function setVAliqProd($vAliqProd) {
        $this->vAliqProd = $vAliqProd;
    }

    function setvCIDE($vCIDE) {
        $this->vCIDE = $vCIDE;
    }


}