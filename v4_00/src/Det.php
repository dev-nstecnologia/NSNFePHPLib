<?php

namespace br\ns\newssystems\nfe\struct;
require "Prod.php";
require "Imposto.php";

class Det {

    public $prod;
    public $imposto;
    public $impostoDevol;
    public $infAdProd;
    public $nItem;
    
    function getProd() {
        return $this->prod;
    }

    function getImposto() {
        return $this->imposto;
    }

    function getImpostoDevol() {
        return $this->impostoDevol;
    }

    function getInfAdProd() {
        return $this->infAdProd;
    }

    function getnItem() {
        return $this->nItem;
    }

    function setProd($prod) {
        $this->prod = $prod;
    }

    function setImposto($imposto) {
        $this->imposto = $imposto;
    }

    function setImpostoDevol($impostoDevol) {
        $this->impostoDevol = $impostoDevol;
    }

    function setInfAdProd($infAdProd) {
        $this->infAdProd = $infAdProd;
    }

    function setnItem($nItem) {
        $this->nItem = $nItem;
    }


}
