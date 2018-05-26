<?php

namespace br\ns\newssystems\NFe\struct;

class ISSQNtot {

    public $vServ;
    public $vBC;
    public $vISS;
    public $vPIS;
    public $vCOFINS;
    public $dCompet;
    public $vDeducao;
    public $vOutro;
    public $vDescIncond;
    public $vDescCond;
    public $vISSRet;
    public $cRegTrib;
    
    function getVServ() {
        return $this->vServ;
    }

    function getvBC() {
        return $this->vBC;
    }

    function getvISS() {
        return $this->vISS;
    }

    function getvPIS() {
        return $this->vPIS;
    }

    function getvCOFINS() {
        return $this->vCOFINS;
    }

    function getDCompet() {
        return $this->dCompet;
    }

    function getVDeducao() {
        return $this->vDeducao;
    }

    function getVOutro() {
        return $this->vOutro;
    }

    function getVDescIncond() {
        return $this->vDescIncond;
    }

    function getVDescCond() {
        return $this->vDescCond;
    }

    function getvISSRet() {
        return $this->vISSRet;
    }

    function getCRegTrib() {
        return $this->cRegTrib;
    }

    function setVServ($vServ) {
        $this->vServ = $vServ;
    }

    function setvBC($vBC) {
        $this->vBC = $vBC;
    }

    function setvISS($vISS) {
        $this->vISS = $vISS;
    }

    function setvPIS($vPIS) {
        $this->vPIS = $vPIS;
    }

    function setvCOFINS($vCOFINS) {
        $this->vCOFINS = $vCOFINS;
    }

    function setDCompet($dCompet) {
        $this->dCompet = $dCompet;
    }

    function setVDeducao($vDeducao) {
        $this->vDeducao = $vDeducao;
    }

    function setVOutro($vOutro) {
        $this->vOutro = $vOutro;
    }

    function setVDescIncond($vDescIncond) {
        $this->vDescIncond = $vDescIncond;
    }

    function setVDescCond($vDescCond) {
        $this->vDescCond = $vDescCond;
    }

    function setvISSRet($vISSRet) {
        $this->vISSRet = $vISSRet;
    }

    function setCRegTrib($cRegTrib) {
        $this->cRegTrib = $cRegTrib;
    }
}
