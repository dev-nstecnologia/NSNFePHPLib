<?php

namespace br\ns\newssystems\NFe\struct;

class ProcRef {

    public $nProc;
    public $indProc;

    function getNProc() {
        return $this->nProc;
    }

    function getIndProc() {
        return $this->indProc;
    }

    function setNProc($nProc) {
        $this->nProc = $nProc;
    }

    function setIndProc($indProc) {
        $this->indProc = $indProc;
    }
}