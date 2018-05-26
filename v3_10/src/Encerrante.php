<?php

namespace br\ns\newssystems\nfe\struct;

class Encerrante {

    public $nBico;
    public $nBomba;
    public $nTanque;
    public $vEncIni;
    public $vEncFin;

    function getNBico() {
        return $this->nBico;
    }

    function getNBomba() {
        return $this->nBomba;
    }

    function getNTanque() {
        return $this->nTanque;
    }

    function getVEncIni() {
        return $this->vEncIni;
    }

    function getVEncFin() {
        return $this->vEncFin;
    }

    function setNBico($nBico) {
        $this->nBico = $nBico;
    }

    function setNBomba($nBomba) {
        $this->nBomba = $nBomba;
    }

    function setNTanque($nTanque) {
        $this->nTanque = $nTanque;
    }

    function setVEncIni($vEncIni) {
        $this->vEncIni = $vEncIni;
    }

    function setVEncFin($vEncFin) {
        $this->vEncFin = $vEncFin;
    }


}