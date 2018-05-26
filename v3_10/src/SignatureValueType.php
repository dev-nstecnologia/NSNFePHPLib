<?php

namespace br\ns\newssystems\NFe\struct;

class SignatureValueType {

    public $value;
    public $Id;
    
    function getValue() {
        return $this->value;
    }

    function getId() {
        return $this->Id;
    }

    function setValue($value) {
        $this->value = $value;
    }

    function setId($Id) {
        $this->Id = $Id;
    }
}
