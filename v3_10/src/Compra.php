<?php

namespace br\ns\newssystems\nfe\struct;

class Compra {

    public $xNEmp;
    public $xPed;
    public $xCont;
    
    function getxNEmp() {
        return $this->xNEmp;
    }

    function getXPed() {
        return $this->xPed;
    }

    function getXCont() {
        return $this->xCont;
    }

    function setxNEmp($xNEmp) {
        $this->xNEmp = $xNEmp;
    }

    function setXPed($xPed) {
        $this->xPed = $xPed;
    }

    function setXCont($xCont) {
        $this->xCont = $xCont;
    }


}

