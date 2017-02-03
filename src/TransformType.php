<?php

namespace br\ns\newssystems\NFe\struct;

class TransformType {

    public $xPath;
    public $algorithm;

    function getXPath() {
        return $this->xPath;
    }

    function getAlgorithm() {
        return $this->algorithm;
    }

    function setXPath($xPath) {
        $this->xPath = $xPath;
    }

    function setAlgorithm($algorithm) {
        $this->algorithm = $algorithm;
    }
}