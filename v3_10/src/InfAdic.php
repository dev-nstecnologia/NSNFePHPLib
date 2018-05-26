<?php

namespace br\ns\newssystems\NFe\struct;

class InfAdic {

    public $infAdFisco;
    public $infCpl;
    public $obsCont;
    public $obsFisco;
    public $procRef;
    
    function getInfAdFisco() {
        return $this->infAdFisco;
    }

    function getInfCpl() {
        return $this->infCpl;
    }

    function getObsCont() {
        return $this->obsCont;
    }

    function getObsFisco() {
        return $this->obsFisco;
    }

    function getProcRef() {
        return $this->procRef;
    }

    function setInfAdFisco($infAdFisco) {
        $this->infAdFisco = $infAdFisco;
    }

    function setInfCpl($infCpl) {
        $this->infCpl = $infCpl;
    }

    function setObsCont($obsCont) {
        $this->obsCont = $obsCont;
    }

    function setObsFisco($obsFisco) {
        $this->obsFisco = $obsFisco;
    }

    function setProcRef($procRef) {
        $this->procRef = $procRef;
    }


}
