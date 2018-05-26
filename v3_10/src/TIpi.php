<?php

namespace br\ns\newssystems\NFe\struct;

class TIpi {

    public $clEnq;
    public $CNPJProd;
    public $cSelo;
    public $qSelo;
    public $cEnq;
    public $IPITrib;
    public $IPINT;

    function getClEnq() {
        return $this->clEnq;
    }

    function getCNPJProd() {
        return $this->CNPJProd;
    }

    function getCSelo() {
        return $this->cSelo;
    }

    function getQSelo() {
        return $this->qSelo;
    }

    function getCEnq() {
        return $this->cEnq;
    }

    function getIPITrib() {
        return $this->IPITrib;
    }

    function getIPINT() {
        return $this->IPINT;
    }

    function setClEnq($clEnq) {
        $this->clEnq = $clEnq;
    }

    function setCNPJProd($CNPJProd) {
        $this->CNPJProd = $CNPJProd;
    }

    function setCSelo($cSelo) {
        $this->cSelo = $cSelo;
    }

    function setQSelo($qSelo) {
        $this->qSelo = $qSelo;
    }

    function setCEnq($cEnq) {
        $this->cEnq = $cEnq;
    }

    function setIPITrib($IPITrib) {
        $this->IPITrib = $IPITrib;
    }

    function setIPINT($IPINT) {
        $this->IPINT = $IPINT;
    }
}