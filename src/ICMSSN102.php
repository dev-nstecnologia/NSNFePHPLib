<?php

namespace br\ns\newssystems\nfe\struct;

class ICMSSN102 {

    public $orig;
    public $CSOSN;
    
    function getOrig() {
        return $this->orig;
    }

    function getCSOSN() {
        return $this->CSOSN;
    }

    function setOrig($orig) {
        $this->orig = $orig;
    }

    function setCSOSN($CSOSN) {
        $this->CSOSN = $CSOSN;
    }


}
