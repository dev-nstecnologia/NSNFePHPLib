<?php

namespace br\ns\newssystems\NFe\struct;

class KeyInfoType {

    public $X509Data;
    public $id;
    
    function getX509Data() {
        return $this->X509Data;
    }

    function getid() {
        return $this->id;
    }

    function setX509Data($X509Data) {
        $this->X509Data = $X509Data;
    }

    function setid($id) {
        $this->id = $id;
    }


}
