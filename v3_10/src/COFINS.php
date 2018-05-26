<?php

namespace br\ns\newssystems\nfe\struct;
require "COFINSAliq.php";
require "COFINSQtde.php";
require "COFINSNT.php";
require "COFINSOutr.php";

class COFINS {

    public $COFINSAliq;
    public $COFINSQtde;
    public $COFINSNT;
    public $COFINSOutr;
    
    function getCOFINSAliq() {
        return $this->COFINSAliq;
    }

    function getCOFINSQtde() {
        return $this->COFINSQtde;
    }

    function getCOFINSnt() {
        return $this->COFINSnt;
    }

    function getCOFINSOutr() {
        return $this->COFINSOutr;
    }

    function setCOFINSAliq($COFINSAliq) {
        $this->COFINSAliq = $COFINSAliq;
    }

    function setCOFINSQtde($COFINSQtde) {
        $this->COFINSQtde = $COFINSQtde;
    }

    function setCOFINSnt($COFINSnt) {
        $this->COFINSnt = $COFINSnt;
    }

    function setCOFINSOutr($COFINSOutr) {
        $this->COFINSOutr = $COFINSOutr;
    }


}
