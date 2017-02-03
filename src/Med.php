<?php

namespace br\ns\newssystems\NFe\struct;

class Med {

    public $nLote;
    public $qLote;
    public $dFab;
    public $dVal;
    public $vPMC;

    function getNLote() {
        return $this->nLote;
    }

    function getQLote() {
        return $this->qLote;
    }

    function getDFab() {
        return $this->dFab;
    }

    function getDVal() {
        return $this->dVal;
    }

    function getvPMC() {
        return $this->vPMC;
    }

    function setNLote($nLote) {
        $this->nLote = $nLote;
    }

    function setQLote($qLote) {
        $this->qLote = $qLote;
    }

    function setDFab($dFab) {
        $this->dFab = $dFab;
    }

    function setDVal($dVal) {
        $this->dVal = $dVal;
    }

    function setvPMC($vPMC) {
        $this->vPMC = $vPMC;
    }
}