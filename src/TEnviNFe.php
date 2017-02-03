<?php

namespace br\ns\newssystems\NFe\struct;

class TEnviNFe {

    public $idLote;
    public $indSinc;
    public $NFe;
    public $versao;

    function getIdLote() {
        return $this->idLote;
    }

    function getIndSinc() {
        return $this->indSinc;
    }

    function getNFe() {
        return $this->NFe;
    }

    function getversao() {
        return $this->versao;
    }

    function setIdLote($idLote) {
        $this->idLote = $idLote;
    }

    function setIndSinc($indSinc) {
        $this->indSinc = $indSinc;
    }

    function setNFe($NFe) {
        $this->NFe = $NFe;
    }

    function setversao($versao) {
        $this->versao = $versao;
    }
}