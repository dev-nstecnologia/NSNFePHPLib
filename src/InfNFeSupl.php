<?php

namespace br\ns\newssystems\NFe\struct;


class InfNFeSupl {

    public $qrCode;
    
    function getQrCode() {
        return $this->qrCode;
    }

    function setQrCode($qrCode) {
        $this->qrCode = $qrCode;
    }
}