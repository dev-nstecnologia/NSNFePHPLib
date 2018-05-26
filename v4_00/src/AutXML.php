<?php

namespace br\ns\newssystems\nfe\struct;

Class AutXML {

    public $CNPJ;
    public $CPF;

    function getCNPJ() {
        return $this->CNPJ;
    }

    function getCPF() {
        return $this->CPF;
    }

    function setCNPJ($CNPJ) {
        $this->CNPJ = $CNPJ;
    }

    function setCPF($CPF) {
        $this->CPF = $CPF;
    }


}