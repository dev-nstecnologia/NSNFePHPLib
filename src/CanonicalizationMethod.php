<?php

namespace br\ns\newssystems\nfe\struct;

class CanonicalizationMethod {

    public $algorithm;
    
    function getAlgorithm() {
        return $this->algorithm;
    }

    function setAlgorithm($algorithm) {
        $this->algorithm = $algorithm;
    }


}
