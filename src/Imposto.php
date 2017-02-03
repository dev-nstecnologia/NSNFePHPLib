<?php

namespace br\ns\newssystems\NFe\struct;
require "ICMS.php";
require "IPI.php";
require "PIS.php";
require "COFINS.php";


class Imposto {

    public $vTotTrib;
    public $ICMS;
    public $II;
    public $IPI;
    public $ISSQN;
    public $PIS;
    public $PISST;
    public $COFINS;
    public $COFINSST;
    public $ICMSUFDest;

    function getVTotTrib() {
        return $this->vTotTrib;
    }

    function getICMS() {
        return $this->ICMS;
    }

    function getIpiMy() {
        return $this->ipiMy;
    }

    function getII() {
        return $this->II;
    }

    function getIpi() {
        return $this->ipi;
    }

    function getISSQN() {
        return $this->ISSQN;
    }

    function getPIS() {
        return $this->PIS;
    }

    function getPISST() {
        return $this->PISST;
    }

    function getCOFINS() {
        return $this->COFINS;
    }

    function getCOFINSST() {
        return $this->COFINSST;
    }

    function getICMSUFDest() {
        return $this->ICMSUFDest;
    }

    function setVTotTrib($vTotTrib) {
        $this->vTotTrib = $vTotTrib;
    }

    function setICMS($ICMS) {
        $this->ICMS = $ICMS;
    }

    function setIpiMy($ipiMy) {
        $this->ipiMy = $ipiMy;
    }

    function setII($II) {
        $this->II = $II;
    }

    function setIpi($ipi) {
        $this->ipi = $ipi;
    }

    function setISSQN($ISSQN) {
        $this->ISSQN = $ISSQN;
    }

    function setPIS($PIS) {
        $this->PIS = $PIS;
    }

    function setPISST($PISST) {
        $this->PISST = $PISST;
    }

    function setCOFINS($COFINS) {
        $this->COFINS = $COFINS;
    }

    function setCOFINSST($COFINSST) {
        $this->COFINSST = $COFINSST;
    }

    function setICMSUFDest($ICMSUFDest) {
        $this->ICMSUFDest = $ICMSUFDest;
    }


}