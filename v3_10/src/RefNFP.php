<?php

namespace br\ns\newssystems\NFe\struct;


class RefNFP {

    public $cUF;
    public $AAMM;
    public $CNPJ;
    public $CPF;
    public $IE;
    public $mod;
    public $serIE;
    public $nNF;
    
    function getcUF() {
        return $this->cUF;
    }

    function getAAMM() {
        return $this->AAMM;
    }

    function getCNPJ() {
        return $this->CNPJ;
    }

    function getCPF() {
        return $this->CPF;
    }

    function getIE() {
        return $this->IE;
    }

    function getMod() {
        return $this->mod;
    }

    function getSerIE() {
        return $this->serIE;
    }

    function getnNF() {
        return $this->nNF;
    }

    function setcUF($cUF) {
        $this->cUF = $cUF;
    }

    function setAAMM($AAMM) {
        $this->AAMM = $AAMM;
    }

    function setCNPJ($CNPJ) {
        $this->CNPJ = $CNPJ;
    }

    function setCPF($CPF) {
        $this->CPF = $CPF;
    }

    function setIE($IE) {
        $this->IE = $IE;
    }

    function setMod($mod) {
        $this->mod = $mod;
    }

    function setSerIE($serIE) {
        $this->serIE = $serIE;
    }

    function setnNF($nNF) {
        $this->nNF = $nNF;
    }
}