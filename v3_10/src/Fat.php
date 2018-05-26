<?php

namespace br\ns\newssystems\nfe\struct;

class Fat {

    public $nFat;
    public $vOrig;
    public $vDesc;
    public $vLiq;

    function getNFat() {
        return $this->nFat;
    }

    function getVOrig() {
        return $this->vOrig;
    }

    function getVDesc() {
        return $this->vDesc;
    }

    function getVLiq() {
        return $this->vLiq;
    }

    function setNFat($nFat) {
        $this->nFat = $nFat;
    }

    function setVOrig($vOrig) {
        $this->vOrig = $vOrig;
    }

    function setVDesc($vDesc) {
        $this->vDesc = $vDesc;
    }

    function setVLiq($vLiq) {
        $this->vLiq = $vLiq;
    }


    
}