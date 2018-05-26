<?php

namespace br\ns\newssystems\nfe\struct;

class ICMSSN201 {

    public $orig;
    public $CSOSN;
    public $modBCST;
    public $pMVAST;
    public $pRedBCST;
    public $vBCST;
    public $pICMSST;
    public $vICMSST;
    public $pCredSN;
    public $vCredICMSSN;

    function getOrig() {
        return $this->orig;
    }

    function getCSOSN() {
        return $this->CSOSN;
    }

    function getModBCST() {
        return $this->modBCST;
    }

    function getpMVAST() {
        return $this->pMVAST;
    }

    function getPRedBCST() {
        return $this->pRedBCST;
    }

    function getvBCST() {
        return $this->vBCST;
    }

    function getpICMSST() {
        return $this->pICMSST;
    }

    function getvICMSST() {
        return $this->vICMSST;
    }

    function getPCredSN() {
        return $this->pCredSN;
    }

    function getVCredICMSSN() {
        return $this->vCredICMSSN;
    }

    function setOrig($orig) {
        $this->orig = $orig;
    }

    function setCSOSN($CSOSN) {
        $this->CSOSN = $CSOSN;
    }

    function setModBCST($modBCST) {
        $this->modBCST = $modBCST;
    }

    function setpMVAST($pMVAST) {
        $this->pMVAST = $pMVAST;
    }

    function setPRedBCST($pRedBCST) {
        $this->pRedBCST = $pRedBCST;
    }

    function setvBCST($vBCST) {
        $this->vBCST = $vBCST;
    }

    function setpICMSST($pICMSST) {
        $this->pICMSST = $pICMSST;
    }

    function setvICMSST($vICMSST) {
        $this->vICMSST = $vICMSST;
    }

    function setPCredSN($pCredSN) {
        $this->pCredSN = $pCredSN;
    }

    function setVCredICMSSN($vCredICMSSN) {
        $this->vCredICMSSN = $vCredICMSSN;
    }


    
}
