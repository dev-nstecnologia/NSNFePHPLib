<?php

namespace br\ns\newssystems\nfe\struct;

class ICMSST {

    public $orig;
    public $CST;
    public $vBCSTRet;
    public $vICMSSTRet;
    public $vBCSTDest;
    public $vICMSSTDest;

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

    function getvBCSTDest() {
        return $this->vBCSTDest;
    }

    function getvICMSSTDest() {
        return $this->vICMSSTDest;
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

    function setvBCSTDest($vBCSTDest) {
        $this->vBCSTDest = $vBCSTDest;
    }

    function setvICMSSTDest($vICMSSTDest) {
        $this->vICMSSTDest = $vICMSSTDest;
    }
    
}