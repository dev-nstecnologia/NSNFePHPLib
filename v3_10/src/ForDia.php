<?php

namespace br\ns\newssystems\nfe\struct;

class ForDia {

    public $qtde;
    public $dia;

    function getQtde() {
        return $this->qtde;
    }

    function getDia() {
        return $this->dia;
    }

    function setQtde($qtde) {
        $this->qtde = $qtde;
    }

    function setDia($dia) {
        $this->dia = $dia;
    }


}