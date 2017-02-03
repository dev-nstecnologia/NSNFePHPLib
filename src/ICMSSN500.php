<?php

namespace br\ns\newssystems\nfe\struct;

class ICMSSN500 {

    public $orig;
    public $CSOSN;
    public $vBCSTRet;
    public $vICMSSTRet;

    function getOrig() {
        return $this->orig;
    }

    function getCSOSN() {
        return $this->CSOSN;
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

    function setCSOSN($CSOSN) {
        $this->CSOSN = $CSOSN;
    }

    function setvBCSTRet($vBCSTRet) {
        $this->vBCSTRet = $vBCSTRet;
    }

    function setvICMSSTRet($vICMSSTRet) {
        $this->vICMSSTRet = $vICMSSTRet;
    }


}