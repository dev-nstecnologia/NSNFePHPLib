<?php

namespace br\ns\newssystems\nfe\struct;

class Comb {

    public $cProdANP;
    public $descANP;
    public $pGLP;
    public $pGNn;
    public $pGNi;
    public $vPart;
    public $CODIF;
    public $qTemp;
    public $UFCons;
    public $CIDE;
    public $encerrante;

    function getCProdANP() {
        return $this->cProdANP;
    }

    function getDescANP() {
        return $this->descANP;
    }

    function getPGLP() {
        return $this->pGLP;
    }

    function getPGNn() {
        return $this->pGNn;
    }

    function getPGNi() {
        return $this->pGNi;
    }

    function getVPart() {
        return $this->vPart;
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

    function setDescANP($descANP) {
        $this->descANP = $descANP;
    }

    function setPGLP($pGLP) {
        $this->pGLP = $pGLP;
    }

    function setPGNn($pGNn) {
        $this->pGNn = $pGNn;
    }

    function setPGNi($pGNi) {
        $this->pGNi = $pGNi;
    }

    function setVPart($vPart) {
        $this->vPart = $vPart;
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