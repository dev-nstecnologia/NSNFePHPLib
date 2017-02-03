<?php

namespace br\ns\newssystems\NFe\struct;

class Transporta {

    public $CNPJ;
    public $CPF;
    public $xNome;
    public $IE;
    public $xEnder;
    public $xMun;
    public $UF;
    
    function getCNPJ() {
        return $this->CNPJ;
    }

    function getCPF() {
        return $this->CPF;
    }

    function getXNome() {
        return $this->xNome;
    }

    function getIE() {
        return $this->IE;
    }

    function getXEnder() {
        return $this->xEnder;
    }

    function getXMun() {
        return $this->xMun;
    }

    function getUF() {
        return $this->UF;
    }

    function setCNPJ($CNPJ) {
        $this->CNPJ = $CNPJ;
    }

    function setCPF($CPF) {
        $this->CPF = $CPF;
    }

    function setXNome($xNome) {
        $this->xNome = $xNome;
    }

    function setIE($IE) {
        $this->IE = $IE;
    }

    function setXEnder($xEnder) {
        $this->xEnder = $xEnder;
    }

    function setXMun($xMun) {
        $this->xMun = $xMun;
    }

    function setUF($UF) {
        $this->UF = $UF;
    }
}
