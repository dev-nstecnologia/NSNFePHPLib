<?php

namespace br\ns\newssystems\NFe\struct;

class ObjectFactory {

    public $_Signature_QNAME = "http://www.w3.org/2000/09/xmldsig#";
    public $_NFe_QNAME = "http://www.portalfiscal.inf.br/NFe";
    
    function get_Signature_QNAME() {
        return $this->_Signature_QNAME;
    }

    function get_NFe_QNAME() {
        return $this->_NFe_QNAME;
    }

    function set_Signature_QNAME($_Signature_QNAME) {
        $this->_Signature_QNAME = $_Signature_QNAME;
    }

    function set_NFe_QNAME($_NFe_QNAME) {
        $this->_NFe_QNAME = $_NFe_QNAME;
    }
}
