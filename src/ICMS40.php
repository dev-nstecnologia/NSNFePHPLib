<?php

namespace br\ns\newssystems\nfe\struct;

class ICMS40 {

    public $orig;
    public $CST;
    public $vICMSDeson;
    public $motDesICMS;

    function getOrig() {
        return $this->orig;
    }

    function getCST() {
        return $this->CST;
    }

    function getvICMSDeson() {
        return $this->vICMSDeson;
    }

    function getMotDesICMS() {
        return $this->motDesICMS;
    }

    function setOrig($orig) {
        $this->orig = $orig;
    }

    function setCST($CST) {
        $this->CST = $CST;
    }

    function setvICMSDeson($vICMSDeson) {
        $this->vICMSDeson = $vICMSDeson;
    }

    function setMotDesICMS($motDesICMS) {
        $this->motDesICMS = $motDesICMS;
    }
    
}
    
