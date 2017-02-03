<?php

namespace br\ns\newssystems\nfe\struct;

class Cana {

    public $safra;
    public $ref;
    public $forDia;
    public $qTotMes;
    public $qTotAnt;
    public $qTotGer;
    public $deduc;
    public $vFor;
    public $vTotDed;
    public $vLiqFor;

    function getSafra() {
        return $this->safra;
    }

    function getRef() {
        return $this->ref;
    }

    function getForDia() {
        return $this->forDia;
    }

    function getQTotMes() {
        return $this->qTotMes;
    }

    function getQTotAnt() {
        return $this->qTotAnt;
    }

    function getQTotGer() {
        return $this->qTotGer;
    }

    function getDeduc() {
        return $this->deduc;
    }

    function getVFor() {
        return $this->vFor;
    }

    function getVTotDed() {
        return $this->vTotDed;
    }

    function getVLiqFor() {
        return $this->vLiqFor;
    }

    function setSafra($safra) {
        $this->safra = $safra;
    }

    function setRef($ref) {
        $this->ref = $ref;
    }

    function setForDia($forDia) {
        $this->forDia = $forDia;
    }

    function setQTotMes($qTotMes) {
        $this->qTotMes = $qTotMes;
    }

    function setQTotAnt($qTotAnt) {
        $this->qTotAnt = $qTotAnt;
    }

    function setQTotGer($qTotGer) {
        $this->qTotGer = $qTotGer;
    }

    function setDeduc($deduc) {
        $this->deduc = $deduc;
    }

    function setVFor($vFor) {
        $this->vFor = $vFor;
    }

    function setVTotDed($vTotDed) {
        $this->vTotDed = $vTotDed;
    }

    function setVLiqFor($vLiqFor) {
        $this->vLiqFor = $vLiqFor;
    }


}