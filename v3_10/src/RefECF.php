<?php

namespace br\ns\newssystems\NFe\struct;

class RefECF {

    public $mod;
    public $nECF;
    public $nCOO;

    function getMod() {
        return $this->mod;
    }

    function getnECF() {
        return $this->nECF;
    }

    function getnCOO() {
        return $this->nCOO;
    }

    function setMod($mod) {
        $this->mod = $mod;
    }

    function setnECF($nECF) {
        $this->nECF = $nECF;
    }

    function setnCOO($nCOO) {
        $this->nCOO = $nCOO;
    }
}