<?php

namespace br\ns\newssystems\NFe\struct;
require "ide.php";
require "Emit.php";
require "Dest.php";
require "Det.php";
require "Total.php";
require "Transp.php";

class InfNFe {

    public $ide;
    public $emit;
    public $avulsa;
    public $dest;
    public $retirada;
    public $entrega;
    public $autXML;
    public $det;
    public $total;
    public $transp;
    public $cobr;
    public $pag;
    public $infAdic;
    public $exporta;
    public $compra;
    public $cana;
    public $versao;
    public $Id;

    function getide() {
        return $this->ide;
    }

    function getEmit() {
        return $this->emit;
    }

    function getAvulsa() {
        return $this->avulsa;
    }

    function getDest() {
        return $this->dest;
    }

    function getRetirada() {
        return $this->retirada;
    }

    function getEntrega() {
        return $this->entrega;
    }

    function getAutXML() {
        return $this->autXML;
    }

    function getDet() {
        return $this->det;
    }

    function getTotal() {
        return $this->total;
    }

    function getTransp() {
        return $this->transp;
    }

    function getCobr() {
        return $this->cobr;
    }

    function getPag() {
        return $this->pag;
    }

    function getInfAdic() {
        return $this->infAdic;
    }

    function getExporta() {
        return $this->exporta;
    }

    function getCompra() {
        return $this->compra;
    }

    function getCana() {
        return $this->cana;
    }

    function getversao() {
        return $this->versao;
    }

    function getId() {
        return $this->Id;
    }

    function setIde($Ide) {
        $this->Ide = $Ide;
    }

    function setEmit($emit) {
        $this->emit = $emit;
    }

    function setAvulsa($avulsa) {
        $this->avulsa = $avulsa;
    }

    function setDest($dest) {
        $this->dest = $dest;
    }

    function setRetirada($retirada) {
        $this->retirada = $retirada;
    }

    function setEntrega($entrega) {
        $this->entrega = $entrega;
    }

    function setAutXML($autXML) {
        $this->autXML = $autXML;
    }

    function setDet($det) {
        $this->det = $det;
    }

    function setTotal($total) {
        $this->total = $total;
    }

    function setTransp($transp) {
        $this->transp = $transp;
    }

    function setCobr($cobr) {
        $this->cobr = $cobr;
    }

    function setPag($pag) {
        $this->pag = $pag;
    }

    function setInfAdic($infAdic) {
        $this->infAdic = $infAdic;
    }

    function setExporta($exporta) {
        $this->exporta = $exporta;
    }

    function setCompra($compra) {
        $this->compra = $compra;
    }

    function setCana($cana) {
        $this->cana = $cana;
    }

    function setversao($versao) {
        $this->versao = $versao;
    }

    function setid($id) {
        $this->id = $id;
    }
}