<?php

namespace br\ns\newssystems\nfe\struct;

class ICMSUFDest {

    public $vBCUFDest;
    public $vBCFCPUFDest;
    public $pFCPUFDest;
    public $pICMSUFDest;
    public $pICMSInter;
    public $pICMSInterPart;
    public $vFCPUFDest;
    public $vICMSUFDest;
    public $vICMSUFRemet;

    function getvBCUFDest() {
        return $this->vBCUFDest;
    }

    function getVBCFCPUFDest() {
        return $this->vBCFCPUFDest;
    }

    function getpFCPUFDest() {
        return $this->pFCPUFDest;
    }

    function getpICMSUFDest() {
        return $this->pICMSUFDest;
    }

    function getpICMSInter() {
        return $this->pICMSInter;
    }

    function getpICMSInterPart() {
        return $this->pICMSInterPart;
    }

    function getvFCPUFDest() {
        return $this->vFCPUFDest;
    }

    function getvICMSUFDest() {
        return $this->vICMSUFDest;
    }

    function getvICMSUFRemet() {
        return $this->vICMSUFRemet;
    }

    function setvBCUFDest($vBCUFDest) {
        $this->vBCUFDest = $vBCUFDest;
    }

    function setVBCFCPUFDest($vBCFCPUFDest) {
        $this->vBCFCPUFDest = $vBCFCPUFDest;
    }

    function setpFCPUFDest($pFCPUFDest) {
        $this->pFCPUFDest = $pFCPUFDest;
    }

    function setpICMSUFDest($pICMSUFDest) {
        $this->pICMSUFDest = $pICMSUFDest;
    }

    function setpICMSInter($pICMSInter) {
        $this->pICMSInter = $pICMSInter;
    }

    function setpICMSInterPart($pICMSInterPart) {
        $this->pICMSInterPart = $pICMSInterPart;
    }

    function setvFCPUFDest($vFCPUFDest) {
        $this->vFCPUFDest = $vFCPUFDest;
    }

    function setvICMSUFDest($vICMSUFDest) {
        $this->vICMSUFDest = $vICMSUFDest;
    }

    function setvICMSUFRemet($vICMSUFRemet) {
        $this->vICMSUFRemet = $vICMSUFRemet;
    }
    
}