<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: coins.proto

namespace chain33\phpsdk\lib\protobuf;

class Coins
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \chain33\phpsdk\lib\protobuf\Transaction::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac2030a0b636f696e732e70726f746f1221636861696e33332e70687073" .
            "646b2e6c69622e70726f746f6275662e747970657322c8020a0b436f696e" .
            "73416374696f6e12450a087472616e7366657218012001280b32312e6368" .
            "61696e33332e70687073646b2e6c69622e70726f746f6275662e74797065" .
            "732e4173736574735472616e73666572480012450a087769746864726177" .
            "18042001280b32312e636861696e33332e70687073646b2e6c69622e7072" .
            "6f746f6275662e74797065732e4173736574735769746864726177480012" .
            "430a0767656e6573697318022001280b32302e636861696e33332e706870" .
            "73646b2e6c69622e70726f746f6275662e74797065732e41737365747347" .
            "656e65736973480012510a0e7472616e73666572546f4578656318052001" .
            "280b32372e636861696e33332e70687073646b2e6c69622e70726f746f62" .
            "75662e74797065732e4173736574735472616e73666572546f4578656348" .
            "00120a0a02747918032001280542070a0576616c7565423d5a1d67697468" .
            "75622e636f6d2f3333636e2f636861696e33332f7479706573e2021b6368" .
            "61696e33332f70687073646b2f6c69622f70726f746f627566620670726f" .
            "746f33"
        ));

        static::$is_initialized = true;
    }
}

