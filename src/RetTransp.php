<?php

namespace br\ns\newssystems\NFe\struct;

class RetTransp {

    public $vServ;
    public $vBCRet;
    public $pICMSRet;
    public $vICMSRet;
    public $CFOP;
    public $cMunFG;

    function getVServ() {
        return $this->vServ;
    }

    function getvBCRet() {
        return $this->vBCRet;
    }

    function getpICMSRet() {
        return $this->pICMSRet;
    }

    function getvICMSRet() {
        return $this->vICMSRet;
    }

    function getCFOP() {
        return $this->CFOP;
    }

    function getCMunFG() {
        return $this->cMunFG;
    }

    function setVServ($vServ) {
        $this->vServ = $vServ;
    }

    function setvBCRet($vBCRet) {
        $this->vBCRet = $vBCRet;
    }

    function setpICMSRet($pICMSRet) {
        $this->pICMSRet = $pICMSRet;
    }

    function setvICMSRet($vICMSRet) {
        $this->vICMSRet = $vICMSRet;
    }

    function setCFOP($CFOP) {
        $this->CFOP = $CFOP;
    }

    function setCMunFG($cMunFG) {
        $this->cMunFG = $cMunFG;
    }
}