<?php

namespace br\ns\newssystems\nfe\struct;

class Card {

    public $tpIntegra;
    public $CNPJ;
    public $tBand;
    public $cAut;
    
    function getTpIntegra() {
        return $this->tpIntegra;
    }

    function getCNPJ() {
        return $this->CNPJ;
    }

    function getTBand() {
        return $this->tBand;
    }

    function getCAut() {
        return $this->cAut;
    }

    function setTpIntegra($tpIntegra) {
        $this->tpIntegra = $tpIntegra;
    }

    function setCNPJ($CNPJ) {
        $this->CNPJ = $CNPJ;
    }

    function setTBand($tBand) {
        $this->tBand = $tBand;
    }

    function setCAut($cAut) {
        $this->cAut = $cAut;
    }


}
