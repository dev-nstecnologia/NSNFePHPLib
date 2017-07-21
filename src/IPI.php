<?php

namespace br\ns\newssystems\NFe\struct;
require "IPINT.php";
require "IPITrib.php";

class IPI {

    public $IPINT;
    public $IPITrib;
    public $cEnq;

    function getIPITrib() {
        return $this->IPITrib;
    }

    function setIPITrib($IPITrib) {
        $this->IPITrib = $IPITrib;
    }

    function getIPINT() {
        return $this->IPINT;
    }

    function setIPINT($IPINT) {
        $this->IPINT = $IPINT;
    }

    function getCEnq() {
        return $this->cEnq;
    }

    function setCEnq($cEnq) {
        $this->cEnq = $cEnq;
    }
}