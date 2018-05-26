<?php

namespace br\ns\newssystems\NFe\struct;


class Rastro {
	public $nLote;
	public $qLote;
	public $dFab;
	public $dVal;
	public $cAgreg;

	function getNLote() {
        return $this->nLote;
    }

    function getQLote() {
        return $this->qLote;
    }

    function getDFab() {
        return $this->dFab;
    }

    function getDVal() {
        return $this->dVal;
    }

    function getCAgreg() {
        return $this->cAgreg;
    }

    function setNLote($nLote) {
        $this->nLote = $nLote;
    }

    function setQLote($qLote) {
        $this->qLote = $qLote;
    }

    function setDFab($dFab) {
        $this->dFab = $dFab;
    }

    function setDVal($dVal) {
        $this->dVal = $dVal;
    }

    function setCAgreg($cAgreg) {
        $this->cAgreg = $cAgreg;
    }
}

?>