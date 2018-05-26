<?php

namespace br\ns\newssystems\nfe\struct;

class ICMS20 {

    public $orig;
    public $CST;
    public $modBC;
    public $pRedBC;
    public $vBC;
    public $pICMS;
    public $vICMS;
    public $vBCFCP;
    public $pFCP;
    public $vFCP;
    public $vICMSDeson;
    public $motDesICMS;

    function getOrig() {
        return $this->orig;
    }

    function getCST() {
        return $this->CST;
    }

    function getModBC() {
        return $this->modBC;
    }

    function getPRedBC() {
        return $this->pRedBC;
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

    function getVBCFCP() {
        return $this->vBCFCP;
    }

    function getPFCP() {
        return $this->pFCP;
    }

    function getVFCP() {
        return $this->vFCP;
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

    function setModBC($modBC) {
        $this->modBC = $modBC;
    }

    function setPRedBC($pRedBC) {
        $this->pRedBC = $pRedBC;
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

    function setVBCFCP($vBCFCP) {
        $this->vBCFCP = $vBCFCP;
    }

    function setPFCP($pFCP) {
        $this->pFCP = $pFCP;
    }

    function setVFCP($vFCP) {
        $this->vFCP = $vFCP;
    }

    function setvICMSDeson($vICMSDeson) {
        $this->vICMSDeson = $vICMSDeson;
    }

    function setMotDesICMS($motDesICMS) {
        $this->motDesICMS = $motDesICMS;
    }


    
}
