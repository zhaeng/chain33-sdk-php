<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transaction.proto

namespace Chain33\Phpsdk\Lib\Protobuf\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 *对于一个交易组中的交易，要么全部成功，要么全部失败
 *这个要好好设计一下
 *最好交易构成一个链条[prevhash].独立的交易构成链条
 *只要这个组中有一个执行是出错的，那么就执行不成功
 *三种签名支持
 * ty = 1 -> secp256k1
 * ty = 2 -> ed25519
 * ty = 3 -> sm2
 * ty = 4 -> OnetimeED25519
 * ty = 5 -> RingBaseonED25519
 *
 * Generated from protobuf message <code>chain33.phpsdk.lib.protobuf.types.Signature</code>
 */
class Signature extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 ty = 1;</code>
     */
    private $ty = 0;
    /**
     * Generated from protobuf field <code>bytes pubkey = 2;</code>
     */
    private $pubkey = '';
    /**
     *当ty为5时，格式应该用RingSignature去解析
     *
     * Generated from protobuf field <code>bytes signature = 3;</code>
     */
    private $signature = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ty
     *     @type string $pubkey
     *     @type string $signature
     *          当ty为5时，格式应该用RingSignature去解析
     * }
     */
    public function __construct($data = NULL) {
        \chain33\phpsdk\lib\protobuf\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 ty = 1;</code>
     * @return int
     */
    public function getTy()
    {
        return $this->ty;
    }

    /**
     * Generated from protobuf field <code>int32 ty = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTy($var)
    {
        GPBUtil::checkInt32($var);
        $this->ty = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes pubkey = 2;</code>
     * @return string
     */
    public function getPubkey()
    {
        return $this->pubkey;
    }

    /**
     * Generated from protobuf field <code>bytes pubkey = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPubkey($var)
    {
        GPBUtil::checkString($var, False);
        $this->pubkey = $var;

        return $this;
    }

    /**
     *当ty为5时，格式应该用RingSignature去解析
     *
     * Generated from protobuf field <code>bytes signature = 3;</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     *当ty为5时，格式应该用RingSignature去解析
     *
     * Generated from protobuf field <code>bytes signature = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, False);
        $this->signature = $var;

        return $this;
    }

}

