<?php

namespace br\ns\newssystems\NFe\struct;

class RefNF {

    public $cUF;
    public $AAMM;
    public $CNPJ;
    public $mod;
    public $serie;
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

    function getMod() {
        return $this->mod;
    }

    function getSerie() {
        return $this->serie;
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

    function setMod($mod) {
        $this->mod = $mod;
    }

    function setSerie($serie) {
        $this->serie = $serie;
    }

    function setnNF($nNF) {
        $this->nNF = $nNF;
    }
}