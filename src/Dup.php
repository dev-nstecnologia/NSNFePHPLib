<?php

namespace br\ns\newssystems\nfe\struct;

class Dup {

    public $nDup;
    public $dVenc;
    public $vDup;
    
    function getNDup() {
        return $this->nDup;
    }

    function getDVenc() {
        return $this->dVenc;
    }

    function getVDup() {
        return $this->vDup;
    }

    function setNDup($nDup) {
        $this->nDup = $nDup;
    }

    function setDVenc($dVenc) {
        $this->dVenc = $dVenc;
    }

    function setVDup($vDup) {
        $this->vDup = $vDup;
    }


}
