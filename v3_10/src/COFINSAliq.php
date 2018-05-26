<?php

namespace br\ns\newssystems\nfe\struct;

class COFINSAliq {

    public $CST;
    public $vBC;
    public $pCOFINS;
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

    function setvCOFINS($vCOFINS) {
        $this->vCOFINS = $vCOFINS;
    }
    
}
