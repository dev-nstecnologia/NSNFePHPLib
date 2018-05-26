<?php

namespace br\ns\newssystems\nfe\struct;

class TProtNFe {

    public $infProt;
    public $Signature;
    public $versao;

    function getInfProt() {
        return $this->infProt;
    }

    function getSignature() {
        return $this->Signature;
    }

    function getversao() {
        return $this->versao;
    }

    function setInfProt($infProt) {
        $this->infProt = $infProt;
    }

    function setSignature($Signature) {
        $this->Signature = $Signature;
    }

    function setversao($versao) {
        $this->versao = $versao;
    }
}