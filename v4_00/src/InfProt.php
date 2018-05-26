<?php

namespace br\ns\newssystems\NFe\struct;

class InfProt {

    public $tpAmb;
    public $verAplic;
    public $chNFe;
    public $dhRecbto;
    public $nProt;
    public $digVal;
    public $CSTat;
    public $xMotivo;
    public $id;

    function getTpAmb() {
        return $this->tpAmb;
    }

    function getVerAplic() {
        return $this->verAplic;
    }

    function getChNFe() {
        return $this->chNFe;
    }

    function getDhRecbto() {
        return $this->dhRecbto;
    }

    function getNProt() {
        return $this->nProt;
    }

    function getDigVal() {
        return $this->digVal;
    }

    function getCSTat() {
        return $this->CSTat;
    }

    function getXMotivo() {
        return $this->xMotivo;
    }

    function getid() {
        return $this->id;
    }

    function setTpAmb($tpAmb) {
        $this->tpAmb = $tpAmb;
    }

    function setVerAplic($verAplic) {
        $this->verAplic = $verAplic;
    }

    function setChNFe($chNFe) {
        $this->chNFe = $chNFe;
    }

    function setDhRecbto($dhRecbto) {
        $this->dhRecbto = $dhRecbto;
    }

    function setNProt($nProt) {
        $this->nProt = $nProt;
    }

    function setDigVal($digVal) {
        $this->digVal = $digVal;
    }

    function setCSTat($CSTat) {
        $this->CSTat = $CSTat;
    }

    function setXMotivo($xMotivo) {
        $this->xMotivo = $xMotivo;
    }

    function setid($id) {
        $this->id = $id;
    }
}