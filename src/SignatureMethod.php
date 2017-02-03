<?php

namespace br\ns\newssystems\NFe\struct;

class SignatureMethod {

    public $Algorithm;
    
    function getAlgorithm() {
        return $this->Algorithm;
    }

    function setAlgorithm($Algorithm) {
        $this->Algorithm = $Algorithm;
    }
    
}
