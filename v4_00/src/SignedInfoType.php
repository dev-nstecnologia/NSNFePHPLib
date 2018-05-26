<?php

namespace br\ns\newssystems\NFe\struct;

class SignedInfoType {

    public $CanonicalizationMethod;
    public $SignatureMethod;
    public $Reference;
    public $ID;

    function getCanonicalizationMethod() {
        return $this->CanonicalizationMethod;
    }

    function getSignatureMethod() {
        return $this->SignatureMethod;
    }

    function getReference() {
        return $this->Reference;
    }

    function getID() {
        return $this->ID;
    }

    function setCanonicalizationMethod($CanonicalizationMethod) {
        $this->CanonicalizationMethod = $CanonicalizationMethod;
    }

    function setSignatureMethod($SignatureMethod) {
        $this->SignatureMethod = $SignatureMethod;
    }

    function setReference($Reference) {
        $this->Reference = $Reference;
    }

    function setID($ID) {
        $this->ID = $ID;
    }
    
}