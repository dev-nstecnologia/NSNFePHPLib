<?php

namespace br\ns\newssystems\NFe\struct;

class TRetEnviNFe {

    public $tpAmb;
    public $verAplic;
    public $CSTat;
    public $xMotivo;
    public $cUF;
    public $dhRecbto;
    public $infRec;
    public $protNFe;
    public $versao;
    
    function getTpAmb() {
        return $this->tpAmb;
    }

    function getVerAplic() {
        return $this->verAplic;
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

    function getInfRec() {
        return $this->infRec;
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

    function setInfRec($infRec) {
        $this->infRec = $infRec;
    }

    function setProtNFe($protNFe) {
        $this->protNFe = $protNFe;
    }

    function setversao($versao) {
        $this->versao = $versao;
    }
}