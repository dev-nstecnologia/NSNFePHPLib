<?php

namespace br\ns\newssystems\NFe\struct;

class NFref {

    public $refNFe;
    public $refNF;
    public $refNFP;
    public $refCTe;
    public $refECF;
    
    function getRefNFe() {
        return $this->refNFe;
    }

    function getRefNF() {
        return $this->refNF;
    }

    function getRefNFP() {
        return $this->refNFP;
    }

    function getRefCTe() {
        return $this->refCTe;
    }

    function getRefECF() {
        return $this->refECF;
    }

    function setRefNFe($refNFe) {
        $this->refNFe = $refNFe;
    }

    function setRefNF($refNF) {
        $this->refNF = $refNF;
    }

    function setRefNFP($refNFP) {
        $this->refNFP = $refNFP;
    }

    function setRefCTe($refCTe) {
        $this->refCTe = $refCTe;
    }

    function setRefECF($refECF) {
        $this->refECF = $refECF;
    }


}
