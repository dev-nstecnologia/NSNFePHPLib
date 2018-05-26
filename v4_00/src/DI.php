<?php

namespace br\ns\newssystems\nfe\struct;

require "Adi.php";

class DI {

    public $nDI;
    public $dDI;
    public $xLocDesemb;
    public $UFDesemb;
    public $dDesemb;
    public $tpViaTransp;
    public $vAFRMM;
    public $tpIntermedio;
    public $CNPJ;
    public $UFTerceiro;
    public $cExportador;
    public $adi;
    
    function getnDI() {
        return $this->nDI;
    }

    function getdDI() {
        return $this->dDI;
    }

    function getXLocDesemb() {
        return $this->xLocDesemb;
    }

    function getUFDesemb() {
        return $this->UFDesemb;
    }

    function getDDesemb() {
        return $this->dDesemb;
    }

    function getTpViaTransp() {
        return $this->tpViaTransp;
    }

    function getvAFRMM() {
        return $this->vAFRMM;
    }

    function getTpIntermedio() {
        return $this->tpIntermedio;
    }

    function getCNPJ() {
        return $this->CNPJ;
    }

    function getUFTerceiro() {
        return $this->UFTerceiro;
    }

    function getCExportador() {
        return $this->cExportador;
    }

    function getAdi() {
        return $this->adi;
    }

    function setnDI($nDI) {
        $this->nDI = $nDI;
    }

    function setdDI($dDI) {
        $this->dDI = $dDI;
    }

    function setXLocDesemb($xLocDesemb) {
        $this->xLocDesemb = $xLocDesemb;
    }

    function setUFDesemb($UFDesemb) {
        $this->UFDesemb = $UFDesemb;
    }

    function setDDesemb($dDesemb) {
        $this->dDesemb = $dDesemb;
    }

    function setTpViaTransp($tpViaTransp) {
        $this->tpViaTransp = $tpViaTransp;
    }

    function setvAFRMM($vAFRMM) {
        $this->vAFRMM = $vAFRMM;
    }

    function setTpIntermedio($tpIntermedio) {
        $this->tpIntermedio = $tpIntermedio;
    }

    function setCNPJ($CNPJ) {
        $this->CNPJ = $CNPJ;
    }

    function setUFTerceiro($UFTerceiro) {
        $this->UFTerceiro = $UFTerceiro;
    }

    function setCExportador($cExportador) {
        $this->cExportador = $cExportador;
    }

    function setAdi($adi) {
        $this->adi = $adi;
    }

    
}
