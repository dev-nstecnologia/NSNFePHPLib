<?php

namespace br\ns\newssystems\nfe\struct;

class TConsReciNFe {

    public $tpAmb;
    public $nRec;
    public $versao;
    
    function getTpAmb() {
        return $this->tpAmb;
    }

    function getNRec() {
        return $this->nRec;
    }

    function getVersao() {
        return $this->versao;
    }

    function setTpAmb($tpAmb) {
        $this->tpAmb = $tpAmb;
    }

    function setNRec($nRec) {
        $this->nRec = $nRec;
    }

    function setVersao($versao) {
        $this->versao = $versao;
    }
}
