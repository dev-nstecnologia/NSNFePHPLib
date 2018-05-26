<?php

namespace br\ns\newssystems\NFe\struct;
require 'TNFe.php';

class TNFeProc {

    public $NFe;
    public $protNFe;
    public $versao;

    function getNFe() {
        return $this->NFe;
    }

    function getProtNFe() {
        return $this->protNFe;
    }

    function getversao() {
        return $this->versao;
    }

    function setNFe($NFe) {
        $this->NFe = $NFe;
    }

    function setProtNFe($protNFe) {
        $this->protNFe = $protNFe;
    }

    function setversao($versao) {
        $this->versao = $versao;
    }

    function toJSON(){
        return json_encode((array)$this, JSON_UNESCAPED_UNICODE);
    }
}