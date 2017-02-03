<?php

namespace br\ns\newssystems\nfe\struct;

class Avulsa {

    public $CNPJ;
    public $xOrgao;
    public $matr;
    public $xAgente;
    public $fone;
    public $UF;
    public $ndar;
    public $dEmi;
    public $nDAR;
    public $repEmi;
    public $dPag;
    
    function getCNPJ() {
        return $this->CNPJ;
    }

    function getXOrgao() {
        return $this->xOrgao;
    }

    function getMatr() {
        return $this->matr;
    }

    function getXAgente() {
        return $this->xAgente;
    }

    function getFone() {
        return $this->fone;
    }

    function getUF() {
        return $this->UF;
    }

    function getNdar() {
        return $this->ndar;
    }

    function getDEmi() {
        return $this->dEmi;
    }

    function getnDAR() {
        return $this->nDAR;
    }

    function getRepEmi() {
        return $this->repEmi;
    }

    function getDPag() {
        return $this->dPag;
    }

    function setCNPJ($CNPJ) {
        $this->CNPJ = $CNPJ;
    }

    function setXOrgao($xOrgao) {
        $this->xOrgao = $xOrgao;
    }

    function setMatr($matr) {
        $this->matr = $matr;
    }

    function setXAgente($xAgente) {
        $this->xAgente = $xAgente;
    }

    function setFone($fone) {
        $this->fone = $fone;
    }

    function setUF($UF) {
        $this->UF = $UF;
    }

    function setNdar($ndar) {
        $this->ndar = $ndar;
    }

    function setDEmi($dEmi) {
        $this->dEmi = $dEmi;
    }

    function setnDAR($nDAR) {
        $this->nDAR = $nDAR;
    }

    function setRepEmi($repEmi) {
        $this->repEmi = $repEmi;
    }

    function setDPag($dPag) {
        $this->dPag = $dPag;
    }

}
