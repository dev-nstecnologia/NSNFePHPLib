<?php

namespace br\ns\newssystems\nfe\struct;

class Comb {

    public $cProdANP;
    public $pMixGN;
    public $CODIF;
    public $qTemp;
    public $UFCons;
    public $CIDE;
    public $encerrante;

    function getCProdANP() {
        return $this->cProdANP;
    }

    function getPMixGN() {
        return $this->pMixGN;
    }

    function getCODIF() {
        return $this->CODIF;
    }

    function getQTemp() {
        return $this->qTemp;
    }

    function getUFCons() {
        return $this->UFCons;
    }

    function getCIDE() {
        return $this->CIDE;
    }

    function getEncerrante() {
        return $this->encerrante;
    }

    function setCProdANP($cProdANP) {
        $this->cProdANP = $cProdANP;
    }

    function setPMixGN($pMixGN) {
        $this->pMixGN = $pMixGN;
    }

    function setCODIF($CODIF) {
        $this->CODIF = $CODIF;
    }

    function setQTemp($qTemp) {
        $this->qTemp = $qTemp;
    }

    function setUFCons($UFCons) {
        $this->UFCons = $UFCons;
    }

    function setCIDE($CIDE) {
        $this->CIDE = $CIDE;
    }

    function setEncerrante($encerrante) {
        $this->encerrante = $encerrante;
    }


}