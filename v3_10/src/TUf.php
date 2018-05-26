<?php

namespace br\ns\newssystems\NFe\struct;

abstract class TUf extends BasicEnum {
    const AC = "AC";
    const AL = "AL";
    const AM = "AM";
    const AP = "AP";
    const BA = "BA";
    const CE = "Ce";
    const DF = "DF";
    const ES = "ES";
    const GO = "GO";
    const MA = "MA";
    const MG = "MG";
    const MS = "MS";
    const MT = "MT";
    const PA = "PA";
    const PB = "PB";
    const PE = "PE";
    const PI = "PI";
    const PR = "PR";
    const RJ = "RJ";
    const RN = "RN";
    const RO = "RO";
    const RR = "RR";
    const RS = "RS";
    const SC = "SC";
    const SE = "SE";
    const SP = "SP";
    const TO = "TO";
    const EX = "EX";
    
    function fromValue($UF){
        return strval($UF);
    }
        
}

