<?php

namespace br\ns\newssystems\nfe\struct;

class DetExport {

    public $nDraw;
    public $exportInd;
    
    function getNDraw() {
        return $this->nDraw;
    }

    function getExportInd() {
        return $this->exportInd;
    }

    function setNDraw($nDraw) {
        $this->nDraw = $nDraw;
    }

    function setExportInd($exportInd) {
        $this->exportInd = $exportInd;
    }


}
