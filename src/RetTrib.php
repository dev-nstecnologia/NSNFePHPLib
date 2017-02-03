<?php

namespace br\ns\newssystems\NFe\struct;

class RetTrib {

    public $vRetPIS;
    public $vRetCOFINS;
    public $vRetCSLL;
    public $vBCIRRF;
    public $vIRRF;
    public $vBCRetPrev;
    public $vRetPrev;

    function getVRetPIS() {
        return $this->vRetPIS;
    }

    function getVRetCOFINS() {
        return $this->vRetCOFINS;
    }

    function getVRetCSLL() {
        return $this->vRetCSLL;
    }

    function getvBCIRRF() {
        return $this->vBCIRRF;
    }

    function getvIRRF() {
        return $this->vIRRF;
    }

    function getvBCRetPrev() {
        return $this->vBCRetPrev;
    }

    function getVRetPrev() {
        return $this->vRetPrev;
    }

    function setVRetPIS($vRetPIS) {
        $this->vRetPIS = $vRetPIS;
    }

    function setVRetCOFINS($vRetCOFINS) {
        $this->vRetCOFINS = $vRetCOFINS;
    }

    function setVRetCSLL($vRetCSLL) {
        $this->vRetCSLL = $vRetCSLL;
    }

    function setvBCIRRF($vBCIRRF) {
        $this->vBCIRRF = $vBCIRRF;
    }

    function setvIRRF($vIRRF) {
        $this->vIRRF = $vIRRF;
    }

    function setvBCRetPrev($vBCRetPrev) {
        $this->vBCRetPrev = $vBCRetPrev;
    }

    function setVRetPrev($vRetPrev) {
        $this->vRetPrev = $vRetPrev;
    }
}