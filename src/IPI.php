<?php

namespace br\ns\newssystems\NFe\struct;
require "IPINT.php";

class IPI {

    //public $vIPIdevol;
    public $IPINT;
    public $cEnq;

    function getvIPIdevol() {
        return $this->vIPIdevol;
    }

    function setvIPIdevol($vIPIdevol) {
        $this->vIPIdevol = $vIPIdevol;
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