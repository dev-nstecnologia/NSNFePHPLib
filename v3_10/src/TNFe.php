<?php

namespace br\ns\newssystems\NFe\struct;
require "InfNFe.php";

class TNFe {

    public $infNFe;
    public $infNFeSupl;
    //public $Signature;
    
    function getInfNFe() {
        return $this->infNFe;
    }

    function getInfNFeSupl() {
        return $this->infNFeSupl;
    }

    function getSignature() {
        return $this->Signature;
    }

    function setInfNFe($infNFe) {
        $this->infNFe = $infNFe;
    }

    function setInfNFeSupl($infNFeSupl) {
        $this->infNFeSupl = $infNFeSupl;
    }

    function setSignature($Signature) {
        $this->Signature = $Signature;
    }
}