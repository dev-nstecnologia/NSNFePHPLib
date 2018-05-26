<?php

namespace br\ns\newssystems\NFe\struct;

class IPITrib {

    public $CST;
    public $vBC;
    public $pIPI;
    public $qUnid;
    public $vUnid;
    public $vIPI;

    function getCST() {
        return $this->CST;
    }

    function getvBC() {
        return $this->vBC;
    }

    function getpIPI() {
        return $this->pIPI;
    }

    function getQUnid() {
        return $this->qUnid;
    }

    function getVUnid() {
        return $this->vUnid;
    }

    function getvIPI() {
        return $this->vIPI;
    }

    function setCST($CST) {
        $this->CST = $CST;
    }

    function setvBC($vBC) {
        $this->vBC = $vBC;
    }

    function setpIPI($pIPI) {
        $this->pIPI = $pIPI;
    }

    function setQUnid($qUnid) {
        $this->qUnid = $qUnid;
    }

    function setVUnid($vUnid) {
        $this->vUnid = $vUnid;
    }

    function setvIPI($vIPI) {
        $this->vIPI = $vIPI;
    }


}