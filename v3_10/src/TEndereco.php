<?php

namespace br\ns\newssystems\NFe\struct;

class TEndereco {

    public $xLgr;
    public $nro;
    public $xCpl;
    public $xBairro;
    public $cMun;
    public $xMun;
    public $UF;
    public $CEP;
    public $cPais;
    public $xPais;
    public $fone;

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

    function getCEP() {
        return $this->CEP;
    }

    function getCPais() {
        return $this->cPais;
    }

    function getXPais() {
        return $this->xPais;
    }

    function getFone() {
        return $this->fone;
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

    function setCEP($CEP) {
        $this->CEP = $CEP;
    }

    function setCPais($cPais) {
        $this->cPais = $cPais;
    }

    function setXPais($xPais) {
        $this->xPais = $xPais;
    }

    function setFone($fone) {
        $this->fone = $fone;
    }
}