<?php

namespace br\ns\newssystems\nfe\struct;
require "TEndereco.php";

class Dest {

    public $CNPJ;
    public $CPF;
    public $idEstrangeiro;
    public $xNome;
    public $enderDest;
    public $indIEDest;
    public $IE;
    public $ISUF;
    public $IM;
    public $email;

    function getCNPJ() {
        return $this->CNPJ;
    }

    function getCPF() {
        return $this->CPF;
    }

    function getIdEstrangeiro() {
        return $this->idEstrangeiro;
    }

    function getXNome() {
        return $this->xNome;
    }

    function getEnderDest() {
        return $this->enderDest;
    }

    function getIndIEDest() {
        return $this->indIEDest;
    }

    function getIE() {
        return $this->IE;
    }

    function getISUF() {
        return $this->ISUF;
    }

    function getIM() {
        return $this->IM;
    }

    function getEmail() {
        return $this->email;
    }

    function setCNPJ($CNPJ) {
        $this->CNPJ = $CNPJ;
    }

    function setCPF($CPF) {
        $this->CPF = $CPF;
    }

    function setIdEstrangeiro($idEstrangeiro) {
        $this->idEstrangeiro = $idEstrangeiro;
    }

    function setXNome($xNome) {
        $this->xNome = $xNome;
    }

    function setEnderDest($enderDest) {
        $this->enderDest = $enderDest;
    }

    function setIndIEDest($indIEDest) {
        $this->indIEDest = $indIEDest;
    }

    function setIE($IE) {
        $this->IE = $IE;
    }

    function setISUF($ISUF) {
        $this->ISUF = $ISUF;
    }

    function setIM($IM) {
        $this->IM = $IM;
    }

    function setEmail($email) {
        $this->email = $email;
    }


}
