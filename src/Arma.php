<?php

namespace br\ns\newssystems\NFe\struct;

Class Arma {

    public $tpArma;
    public $nSerie;
    public $nCano;
    public $descr;

    function getTpArma() {
        return $this->tpArma;
    }

    function getNSerie() {
        return $this->nSerie;
    }

    function getNCano() {
        return $this->nCano;
    }

    function getDescr() {
        return $this->descr;
    }

    function setTpArma($tpArma) {
        $this->tpArma = $tpArma;
    }

    function setNSerie($nSerie) {
        $this->nSerie = $nSerie;
    }

    function setNCano($nCano) {
        $this->nCano = $nCano;
    }

    function setDescr($descr) {
        $this->descr = $descr;
    }


}