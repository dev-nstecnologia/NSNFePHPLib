<?php

namespace br\ns\newssystems\NFe\struct;

class X509DataType {

    public $X509Certificate;

    function getX509Certificate() {
        return $this->X509Certificate;
    }

    function setX509Certificate($X509Certificate) {
        $this->X509Certificate = $X509Certificate;
    }
}