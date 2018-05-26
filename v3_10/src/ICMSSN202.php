<?php

namespace br\ns\newssystems\nfe\struct;

class ICMSSN202 {

    public $orig;
    public $CSOSN;
    public $modBCST;
    public $pMVAST;
    public $pRedBCST;
    public $vBCST;
    public $pICMSST;
    public $vICMSST;

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
    
}