<?php

namespace br\ns\newssystems\NFe\struct;

class Transp {

    public $modFrete;
    public $transporta;
    public $retTransp;
    public $veicTransp;
    public $reboque;
    public $vagao;
    public $balsa;
    public $vol;
    
    function getModFrete() {
        return $this->modFrete;
    }

    function getTransporta() {
        return $this->transporta;
    }

    function getRetTransp() {
        return $this->retTransp;
    }

    function getVeicTransp() {
        return $this->veicTransp;
    }

    function getReboque() {
        return $this->reboque;
    }

    function getVagao() {
        return $this->vagao;
    }

    function getBalsa() {
        return $this->balsa;
    }

    function getVol() {
        return $this->vol;
    }

    function setModFrete($modFrete) {
        $this->modFrete = $modFrete;
    }

    function setTransporta($transporta) {
        $this->transporta = $transporta;
    }

    function setRetTransp($retTransp) {
        $this->retTransp = $retTransp;
    }

    function setVeicTransp($veicTransp) {
        $this->veicTransp = $veicTransp;
    }

    function setReboque($reboque) {
        $this->reboque = $reboque;
    }

    function setVagao($vagao) {
        $this->vagao = $vagao;
    }

    function setBalsa($balsa) {
        $this->balsa = $balsa;
    }

    function setVol($vol) {
        $this->vol = $vol;
    }
}