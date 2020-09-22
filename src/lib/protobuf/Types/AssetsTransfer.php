<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transaction.proto

namespace Chain33\Phpsdk\Lib\Protobuf\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>chain33.phpsdk.lib.protobuf.types.AssetsTransfer</code>
 */
class AssetsTransfer extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string cointoken = 1;</code>
     */
    private $cointoken = '';
    /**
     * Generated from protobuf field <code>int64 amount = 2;</code>
     */
    private $amount = 0;
    /**
     * Generated from protobuf field <code>bytes note = 3;</code>
     */
    private $note = '';
    /**
     * Generated from protobuf field <code>string to = 4;</code>
     */
    private $to = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cointoken
     *     @type int|string $amount
     *     @type string $note
     *     @type string $to
     * }
     */
    public function __construct($data = NULL) {
        \chain33\phpsdk\lib\protobuf\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string cointoken = 1;</code>
     * @return string
     */
    public function getCointoken()
    {
        return $this->cointoken;
    }

    /**
     * Generated from protobuf field <code>string cointoken = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCointoken($var)
    {
        GPBUtil::checkString($var, True);
        $this->cointoken = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 2;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes note = 3;</code>
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Generated from protobuf field <code>bytes note = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNote($var)
    {
        GPBUtil::checkString($var, False);
        $this->note = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string to = 4;</code>
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Generated from protobuf field <code>string to = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTo($var)
    {
        GPBUtil::checkString($var, True);
        $this->to = $var;

        return $this;
    }

}

