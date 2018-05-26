<?php

namespace br\ns\newssystems\nfe\struct;

class TransformsType {

    public $transform;
    public $algorithm;
	
    function getTransform() {
        return $this->transform;
    }

    function setTransform($transform) {
        $this->transform = $transform;
    }
	
	function getalgorithm() {
        return $this->algorithm;
    }

    function setalgorithm($algorithm) {
        $this->algorithm = $algorithm;
    }
}

