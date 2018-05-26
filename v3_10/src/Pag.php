<?php

namespace br\ns\newssystems\NFe\struct;

class Pag {

    public $tPag;
    public $vPag;
    public $card;

    function getTPag() {
        return $this->tPag;
    }

    function getVPag() {
        return $this->vPag;
    }

    function getCard() {
        return $this->card;
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