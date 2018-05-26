<?php

namespace br\ns\newssystems\nfe\struct;
require 'TEnderEmi.php';


class Emit {

    public $CNPJ;
    public $CPF;
    public $xNome;
    public $xFant;
    public $enderEmit;
    public $IE;
    public $IEST;
    public $IM;
    public $CNAE;
    public $CRT;

    function getCNPJ() {
        return $this->CNPJ;
    }

    function getCPF() {
        return $this->CPF;
    }

    function getxNome() {
        return $this->xNome;
    }

    function getxFant() {
        return $this->xFant;
    }

    function getenderEmit() {
        return $this->enderEmit;
    }

    function getIE() {
        return $this->IE;
    }

    function getIEST() {
        return $this->IEST;
    }

    function getIM() {
        return $this->IM;
    }

    function getCNAE() {
        return $this->CNAE;
    }

    function getCRT() {
        return $this->CRT;
    }

    function setCNPJ($CNPJ) {
        $this->CNPJ = $CNPJ;
    }

    function setCPF($CPF) {
        $this->CPF = $CPF;
    }

    function setxNome($xNome) {
        $this->xNome = $xNome;
    }

    function setxFant($xFant) {
        $this->xFant = $xFant;
    }

    function setenderEmit($enderEmit) {
        $this->enderEmit = $enderEmit;
    }

    function setIE($IE) {
        $this->IE = $IE;
    }

    function setIEST($IEST) {
        $this->IEST = $IEST;
    }

    function setIM($IM) {
        $this->IM = $IM;
    }

    function setCNAE($CNAE) {
        $this->CNAE = $CNAE;
    }

    function setCRT($CRT) {
        $this->CRT = $CRT;
    }


}