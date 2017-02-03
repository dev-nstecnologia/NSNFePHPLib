<?php

namespace br\ns\newssystems\nfe\struct;

class ICMSSN101 {

    public $orig;
    public $CSOSN;
    public $pCredSN;
    public $vCredICMSSN;

    function getOrig() {
        return $this->orig;
    }

    function getCSOSN() {
        return $this->CSOSN;
    }

    function getPCredSN() {
        return $this->pCredSN;
    }

    function getVCredICMSSN() {
        return $this->vCredICMSSN;
    }

    function setOrig($orig) {
        $this->orig = $orig;
    }

    function setCSOSN($CSOSN) {
        $this->CSOSN = $CSOSN;
    }

    function setPCredSN($pCredSN) {
        $this->pCredSN = $pCredSN;
    }

    function setVCredICMSSN($vCredICMSSN) {
        $this->vCredICMSSN = $vCredICMSSN;
    }


}