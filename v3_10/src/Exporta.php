<?php

namespace br\ns\newssystems\nfe\struct;

class Exporta {

    public $UFSaidaPais;
    public $xLocExporta;
    public $xLocDespacho;

    function getUFSaidaPais() {
        return $this->UFSaidaPais;
    }

    function getXLocExporta() {
        return $this->xLocExporta;
    }

    function getXLocDespacho() {
        return $this->xLocDespacho;
    }

    function setUFSaidaPais($UFSaidaPais) {
        $this->UFSaidaPais = $UFSaidaPais;
    }

    function setXLocExporta($xLocExporta) {
        $this->xLocExporta = $xLocExporta;
    }

    function setXLocDespacho($xLocDespacho) {
        $this->xLocDespacho = $xLocDespacho;
    }


}