<?php

namespace br\ns\newssystems\nfe\struct;
require "ICMSTot.php";

class Total {

    public $ICMSTot;
    public $ISSQNtot;
    public $retTrib;

    function getICMSTot() {
        return $this->ICMSTot;
    }

    function getISSQNtot() {
        return $this->ISSQNtot;
    }

    function getRetTrib() {
        return $this->retTrib;
    }

    function setICMSTot($ICMSTot) {
        $this->ICMSTot = $ICMSTot;
    }

    function setISSQNtot($ISSQNtot) {
        $this->ISSQNtot = $ISSQNtot;
    }

    function setRetTrib($retTrib) {
        $this->retTrib = $retTrib;
    }
}