<?php

namespace br\ns\newssystems\nfe\struct;

class ICMS30 {

    public $orig;
    public $CST;
    public $modBCST;
    public $pMVAST;
    public $pRedBCST;
    public $vBCST;
    public $pICMSST;
    public $vICMSST;
    public $vICMSDeson;
    public $motDesICMS;

    function getOrig() {
        return $this->orig;
    }

    function getCST() {
        return $this->CST;
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

    function setvICMSDeson($vICMSDeson) {
        $this->vICMSDeson = $vICMSDeson;
    }

    function setMotDesICMS($motDesICMS) {
        $this->motDesICMS = $motDesICMS;
    }


    
}