<?php

namespace br\ns\newssystems\NFe\struct;

class ObsCont {

    public $xTexto;
    public $xCampo;

    function getXTexto() {
        return $this->xTexto;
    }

    function getxCampo() {
        return $this->xCampo;
    }

    function setXTexto($xTexto) {
        $this->xTexto = $xTexto;
    }

    function setxCampo($xCampo) {
        $this->xCampo = $xCampo;
    }
}