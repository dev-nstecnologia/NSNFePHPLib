<?php

namespace br\ns\newssystems\nfe\struct;

class Cobr {

    public $fat;
    public $dup;
    
    function getFat() {
        return $this->fat;
    }

    function getDup() {
        return $this->dup;
    }

    function setFat($fat) {
        $this->fat = $fat;
    }

    function setDup($dup) {
        $this->dup = $dup;
    }


}