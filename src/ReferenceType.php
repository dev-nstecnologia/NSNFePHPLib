<?php

namespace br\ns\newssystems\NFe\struct;

class ReferenceType {

    public $Transforms;
    public $DigestMethod;
    public $DigestValue;
    public $id;
    public $URI;
    public $Type;

    function getTransforms() {
        return $this->Transforms;
    }

    function getDigestMethod() {
        return $this->DigestMethod;
    }

    function getDigestValue() {
        return $this->DigestValue;
    }

    function getid() {
        return $this->id;
    }

    function getURI() {
        return $this->URI;
    }

    function getType() {
        return $this->Type;
    }

    function setTransforms($Transforms) {
        $this->Transforms = $Transforms;
    }

    function setDigestMethod($DigestMethod) {
        $this->DigestMethod = $DigestMethod;
    }

    function setDigestValue($DigestValue) {
        $this->DigestValue = $DigestValue;
    }

    function setid($id) {
        $this->id = $id;
    }

    function setURI($URI) {
        $this->URI = $URI;
    }

    function setType($Type) {
        $this->Type = $Type;
    }
}