<?php

namespace br\ns\newssystems\nfe\struct;

class ICMSSN500 {

    public $orig;
    public $CSOSN;
    public $vBCSTRet;
    public $pST;
    public $vICMSSTRet;
    public $vBCFCPSTRet;
    public $pFCPSTRet;
    public $vFCPSTRet;

    function getOrig() {
        return $this->orig;
    }

    function getCSOSN() {
        return $this->CSOSN;
    }

    function getvBCSTRet() {
        return $this->vBCSTRet;
    }

    function getPST() {
        return $this->pST;
    }

    function getvICMSSTRet() {
        return $this->vICMSSTRet;
    }

    function getVBCFCPSTRet() {
        return $this->vBCFCPST;
    }

    function getPFCPSTRet() {
        return $this->pFCPST;
    }

    function getVFCPSTRet() {
        return $this->vFCPST;
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

    function setPST($pST) {
        $this->pST = $pST;
    }

    function setvICMSSTRet($vICMSSTRet) {
        $this->vICMSSTRet = $vICMSSTRet;
    }

    function setVBCFCPSTRet($vBCFCPSTRet) {
        $this->vBCFCPSTRet = $vBCFCPSTRet;
    }

    function setPFCPSTRet($pFCPSTRet) {
        $this->pFCPSTRet = $pFCPSTRet;
    }

    function setVFCPSTRet($vFCPSTRet) {
        $this->vFCPSTRet = $vFCPSTRet;
    }
}