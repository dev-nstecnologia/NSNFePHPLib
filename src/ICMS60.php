<?php

namespace br\ns\newssystems\nfe\struct;

class ICMS60 {

    public $orig;
    public $CST;
    public $vBCSTRet;
    public $vICMSSTRet;
    
    function getOrig() {
        return $this->orig;
    }

    function getCST() {
        return $this->CST;
    }

    function getvBCSTRet() {
        return $this->vBCSTRet;
    }

    function getvICMSSTRet() {
        return $this->vICMSSTRet;
    }

    function setOrig($orig) {
        $this->orig = $orig;
    }

    function setCST($CST) {
        $this->CST = $CST;
    }

    function setvBCSTRet($vBCSTRet) {
        $this->vBCSTRet = $vBCSTRet;
    }

    function setvICMSSTRet($vICMSSTRet) {
        $this->vICMSSTRet = $vICMSSTRet;
    }


}
