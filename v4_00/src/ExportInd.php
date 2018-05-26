<?php

namespace br\ns\newssystems\nfe\struct;

class ExportInd {

    public $nRE;
    public $chNFe;
    public $qExport;

    function getnRE() {
        return $this->nRE;
    }

    function getChNFe() {
        return $this->chNFe;
    }

    function getQExport() {
        return $this->qExport;
    }

    function setnRE($nRE) {
        $this->nRE = $nRE;
    }

    function setChNFe($chNFe) {
        $this->chNFe = $chNFe;
    }

    function setQExport($qExport) {
        $this->qExport = $qExport;
    }


    
}
