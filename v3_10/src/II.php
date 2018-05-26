<?php

namespace br\ns\newssystems\nfe\struct;

class II {

    public $vBC;
    public $vDespAdu;
    public $vII;
    public $vIOF;
    
    function getvBC() {
        return $this->vBC;
    }

    function getVDespAdu() {
        return $this->vDespAdu;
    }

    function getvII() {
        return $this->vII;
    }

    function getvIOF() {
        return $this->vIOF;
    }

    function setvBC($vBC) {
        $this->vBC = $vBC;
    }

    function setVDespAdu($vDespAdu) {
        $this->vDespAdu = $vDespAdu;
    }

    function setvII($vII) {
        $this->vII = $vII;
    }

    function setvIOF($vIOF) {
        $this->vIOF = $vIOF;
    }
    
}

