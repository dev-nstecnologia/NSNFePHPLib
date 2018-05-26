<?php

namespace br\ns\newssystems\NFe\struct;
require "PISAliq.php";
require "PISQtde.php";
require "PISNT.php";
require "PISOutr.php";

class PIS {

    public $PISAliq;
    public $PISQtde;
    public $PISNT;
    public $PISOutr;
    
    function getPISAliq() {
        return $this->PISAliq;
    }

    function getPISQtde() {
        return $this->PISQtde;
    }

    function getPISnt() {
        return $this->PISnt;
    }

    function getPISOutr() {
        return $this->PISOutr;
    }

    function setPISAliq($PISAliq) {
        $this->PISAliq = $PISAliq;
    }

    function setPISQtde($PISQtde) {
        $this->PISQtde = $PISQtde;
    }

    function setPISnt($PISnt) {
        $this->PISnt = $PISnt;
    }

    function setPISOutr($PISOutr) {
        $this->PISOutr = $PISOutr;
    }
}