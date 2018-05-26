<?php

namespace br\ns\newssystems\nfe\struct;

class ICMS00 {

    public $orig;
    public $CST;
    public $modBC;
    public $vBC;
    public $pICMS;
    public $vICMS;
    public $pFCP;
    public $vFCP;
    
    function getOrig() {
        return $this->orig;
    }

    function getCST() {
        return $this->CST;
    }

    function getModBC() {
        return $this->modBC;
    }

    function getvBC() {
        return $this->vBC;
    }

    function getpICMS() {
        return $this->pICMS;
    }

    function getvICMS() {
        return $this->vICMS;
    }

    function getPFCP() {
        return $this->pFCP;
    }

    function getVFCP() {
        return $this->vFCP;
    }

    function setOrig($orig) {
        $this->orig = $orig;
    }

    function setCST($CST) {
        $this->CST = $CST;
    }

    function setModBC($modBC) {
        $this->modBC = $modBC;
    }

    function setvBC($vBC) {
        $this->vBC = $vBC;
    }

    function setpICMS($pICMS) {
        $this->pICMS = $pICMS;
    }

    function setvICMS($vICMS) {
        $this->vICMS = $vICMS;
    }

    function setPFCP($pFCP) {
        $this->pFCP = $pFCP;
    }

    function setVFCP($vFCP) {
        $this->vFCP = $vFCP;
    }


}
