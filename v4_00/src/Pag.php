<?php

namespace br\ns\newssystems\NFe\struct;
require "DetPag.php";

class Pag {

    public $detPag;
    public $vTroco;

    function getDetPag() {
        return $this->detPag;
    }

    function getVTroco() {
        return $this->vTroco;
    }

    function setDetPag($detPag) {
        $this->detPag = $detPag;
    }

    function setVTroco($vTroco) {
        $this->vTroco = $vTroco;
    }

}

?>