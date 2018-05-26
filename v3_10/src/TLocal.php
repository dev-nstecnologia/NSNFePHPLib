<?php

namespace br\ns\newssystems\NFe\struct;

class TLocal {

    public $CNPJ;
    public $CPF;
    public $xLgr;
    public $nro;
    public $xCpl;
    public $xBairro;
    public $cMun;
    public $xMun;
    public $UF;

    function getCNPJ() {
        return $this->CNPJ;
    }

    function getCPF() {
        return $this->CPF;
    }

    function getXLgr() {
        return $this->xLgr;
    }

    function getNro() {
        return $this->nro;
    }

    function getXCpl() {
        return $this->xCpl;
    }

    function getXBairro() {
        return $this->xBairro;
    }

    function getCMun() {
        return $this->cMun;
    }

    function getXMun() {
        return $this->xMun;
    }

    function getUF() {
        return $this->UF;
    }

    function setCNPJ($CNPJ) {
        $this->CNPJ = $CNPJ;
    }

    function setCPF($CPF) {
        $this->CPF = $CPF;
    }

    function setXLgr($xLgr) {
        $this->xLgr = $xLgr;
    }

    function setNro($nro) {
        $this->nro = $nro;
    }

    function setXCpl($xCpl) {
        $this->xCpl = $xCpl;
    }

    function setXBairro($xBairro) {
        $this->xBairro = $xBairro;
    }

    function setCMun($cMun) {
        $this->cMun = $cMun;
    }

    function setXMun($xMun) {
        $this->xMun = $xMun;
    }

    function setUF($UF) {
        $this->UF = $UF;
    }
}