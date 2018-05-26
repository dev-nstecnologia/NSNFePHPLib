<?php

namespace br\ns\newssystems\NFe\struct;
require "Card.php";

class DetPag {

    public $indPag;
	public $tPag;
    public $vPag;
    public $card;

    function getIndPag() {
        return $this->indPag;
    }

    function getTPag() {
        return $this->tPag;
    }

    function getVPag() {
        return $this->vPag;
    }

    function getCard() {
        return $this->card;
    }

    function setIndPag($indPag) {
        $this->indPag = $indPag;
    }

    function setTPag($tPag) {
        $this->tPag = $tPag;
    }

    function setVPag($vPag) {
        $this->vPag = $vPag;
    }

    function setCard($card) {
        $this->card = $card;
    }
}

?>