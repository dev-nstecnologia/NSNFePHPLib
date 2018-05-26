<?php

namespace br\ns\newssystems\NFe\struct;

Class Adi{
    public $nAdicao;
    public $nSeqAdic;
    public $cFabricante;
    public $vDescDI;
    public $nDraw;
    
    
    function getNAdicao() {
        return $this->nAdicao;
    }

    function getNSeqAdic() {
        return $this->nSeqAdic;
    }

    function getCFabricante() {
        return $this->cFabricante;
    }

    function getVDescDI() {
        return $this->vDescDI;
    }

    function getNDraw() {
        return $this->nDraw;
    }

    function setNAdicao($nAdicao) {
        $this->nAdicao = $nAdicao;
    }

    function setNSeqAdic($nSeqAdic) {
        $this->nSeqAdic = $nSeqAdic;
    }

    function setCFabricante($cFabricante) {
        $this->cFabricante = $cFabricante;
    }

    function setVDescDI($vDescDI) {
        $this->vDescDI = $vDescDI;
    }

    function setNDraw($nDraw) {
        $this->nDraw = $nDraw;
    }


}

