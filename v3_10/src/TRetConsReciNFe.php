<?php

namespace br\ns\newssystems\NFe\struct;

class TRetConsReciNFe {

    public $tpAmb;
    public $verAplic;
    public $nRec;
    public $CSTat;
    public $xMotivo;
    public $cUF;
    public $dhRecbto;
    public $cMsg;
    public $xMsg;
    public $protNFe;
    public $versao;

    function getTpAmb() {
        return $this->tpAmb;
    }

    function getVerAplic() {
        return $this->verAplic;
    }

    function getNRec() {
        return $this->nRec;
    }

    function getCSTat() {
        return $this->CSTat;
    }

    function getXMotivo() {
        return $this->xMotivo;
    }

    function getcUF() {
        return $this->cUF;
    }

    function getDhRecbto() {
        return $this->dhRecbto;
    }

    function getCMsg() {
        return $this->cMsg;
    }

    function getXMsg() {
        return $this->xMsg;
    }

    function getProtNFe() {
        return $this->protNFe;
    }

    function getversao() {
        return $this->versao;
    }

    function setTpAmb($tpAmb) {
        $this->tpAmb = $tpAmb;
    }

    function setVerAplic($verAplic) {
        $this->verAplic = $verAplic;
    }

    function setNRec($nRec) {
        $this->nRec = $nRec;
    }

    function setCSTat($CSTat) {
        $this->CSTat = $CSTat;
    }

    function setXMotivo($xMotivo) {
        $this->xMotivo = $xMotivo;
    }

    function setcUF($cUF) {
        $this->cUF = $cUF;
    }

    function setDhRecbto($dhRecbto) {
        $this->dhRecbto = $dhRecbto;
    }

    function setCMsg($cMsg) {
        $this->cMsg = $cMsg;
    }

    function setXMsg($xMsg) {
        $this->xMsg = $xMsg;
    }

    function setProtNFe($protNFe) {
        $this->protNFe = $protNFe;
    }

    function setversao($versao) {
        $this->versao = $versao;
    }
}