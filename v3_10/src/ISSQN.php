<?php

namespace br\ns\newssystems\NFe\struct;

class ISSQN {

    public $vBC;
    public $vAliq;
    public $vISSQN;
    public $cMunFG;
    public $cListServ;
    public $vDeducao;
    public $vOutro;
    public $vDescIncond;
    public $vDescCond;
    public $vISSRet;
    public $indISS;
    public $cServico;
    public $cMun;
    public $cPais;
    public $nProcesso;
    public $indIncentivo;

    function getvBC() {
        return $this->vBC;
    }

    function getVAliq() {
        return $this->vAliq;
    }

    function getvISSQN() {
        return $this->vISSQN;
    }

    function getCMunFG() {
        return $this->cMunFG;
    }

    function getCListServ() {
        return $this->cListServ;
    }

    function getVDeducao() {
        return $this->vDeducao;
    }

    function getVOutro() {
        return $this->vOutro;
    }

    function getVDescIncond() {
        return $this->vDescIncond;
    }

    function getVDescCond() {
        return $this->vDescCond;
    }

    function getvISSRet() {
        return $this->vISSRet;
    }

    function getIndISS() {
        return $this->indISS;
    }

    function getCServico() {
        return $this->cServico;
    }

    function getCMun() {
        return $this->cMun;
    }

    function getCPais() {
        return $this->cPais;
    }

    function getNProcesso() {
        return $this->nProcesso;
    }

    function getIndIncentivo() {
        return $this->indIncentivo;
    }

    function setvBC($vBC) {
        $this->vBC = $vBC;
    }

    function setVAliq($vAliq) {
        $this->vAliq = $vAliq;
    }

    function setvISSQN($vISSQN) {
        $this->vISSQN = $vISSQN;
    }

    function setCMunFG($cMunFG) {
        $this->cMunFG = $cMunFG;
    }

    function setCListServ($cListServ) {
        $this->cListServ = $cListServ;
    }

    function setVDeducao($vDeducao) {
        $this->vDeducao = $vDeducao;
    }

    function setVOutro($vOutro) {
        $this->vOutro = $vOutro;
    }

    function setVDescIncond($vDescIncond) {
        $this->vDescIncond = $vDescIncond;
    }

    function setVDescCond($vDescCond) {
        $this->vDescCond = $vDescCond;
    }

    function setvISSRet($vISSRet) {
        $this->vISSRet = $vISSRet;
    }

    function setIndISS($indISS) {
        $this->indISS = $indISS;
    }

    function setCServico($cServico) {
        $this->cServico = $cServico;
    }

    function setCMun($cMun) {
        $this->cMun = $cMun;
    }

    function setCPais($cPais) {
        $this->cPais = $cPais;
    }

    function setNProcesso($nProcesso) {
        $this->nProcesso = $nProcesso;
    }

    function setIndIncentivo($indIncentivo) {
        $this->indIncentivo = $indIncentivo;
    }


}