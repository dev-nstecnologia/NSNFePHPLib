<?php

namespace br\ns\newssystems\NFe\struct;

class SignatureType {

    public $SignedInfo;
    public $SignatureValue;
    public $KeyInfo;
    public $Id;

    function getSignedInfo() {
        return $this->SignedInfo;
    }

    function getSignatureValue() {
        return $this->SignatureValue;
    }

    function getKeyInfo() {
        return $this->KeyInfo;
    }

    function getId() {
        return $this->Id;
    }

    function setSignedInfo($SignedInfo) {
        $this->SignedInfo = $SignedInfo;
    }

    function setSignatureValue($SignatureValue) {
        $this->SignatureValue = $SignatureValue;
    }

    function setKeyInfo($KeyInfo) {
        $this->KeyInfo = $KeyInfo;
    }

    function setId($Id) {
        $this->Id = $Id;
    }
}