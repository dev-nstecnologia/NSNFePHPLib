<?php

namespace br\ns\newssystems\NFe\struct;

class Vol {

    public $qVol;
    public $esp;
    public $marca;
    public $nVol;
    public $pesoL;
    public $pesoB;
    public $lacres;
    
    function getQVol() {
        return $this->qVol;
    }

    function getEsp() {
        return $this->esp;
    }

    function getMarca() {
        return $this->marca;
    }

    function getNVol() {
        return $this->nVol;
    }

    function getPesoL() {
        return $this->pesoL;
    }

    function getPesoB() {
        return $this->pesoB;
    }

    function getLacres() {
        return $this->lacres;
    }

    function setQVol($qVol) {
        $this->qVol = $qVol;
    }

    function setEsp($esp) {
        $this->esp = $esp;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setNVol($nVol) {
        $this->nVol = $nVol;
    }

    function setPesoL($pesoL) {
        $this->pesoL = $pesoL;
    }

    function setPesoB($pesoB) {
        $this->pesoB = $pesoB;
    }

    function setLacres($lacres) {
        $this->lacres = $lacres;
    }
}