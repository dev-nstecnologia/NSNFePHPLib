<?php

namespace br\ns\newssystems\NFe\struct;

class ImpostoDevol {

    public $pDevol;
    public $IPI;
    
    function getPDevol() {
        return $this->pDevol;
    }

    function getIPI() {
        return $this->IPI;
    }

    function setPDevol($pDevol) {
        $this->pDevol = $pDevol;
    }

    function setIPI($IPI) {
        $this->IPI = $IPI;
    }
}
