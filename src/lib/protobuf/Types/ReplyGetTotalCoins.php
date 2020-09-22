<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: statistic.proto

namespace Chain33\Phpsdk\Lib\Protobuf\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 *查询symbol代币总额应答
 *
 * Generated from protobuf message <code>chain33.phpsdk.lib.protobuf.types.ReplyGetTotalCoins</code>
 */
class ReplyGetTotalCoins extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 count = 1;</code>
     */
    private $count = 0;
    /**
     * Generated from protobuf field <code>int64 num = 2;</code>
     */
    private $num = 0;
    /**
     * Generated from protobuf field <code>int64 amount = 3;</code>
     */
    private $amount = 0;
    /**
     * Generated from protobuf field <code>bytes nextKey = 4;</code>
     */
    private $nextKey = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $count
     *     @type int|string $num
     *     @type int|string $amount
     *     @type string $nextKey
     * }
     */
    public function __construct($data = NULL) {
        \chain33\phpsdk\lib\protobuf\Statistic::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 count = 1;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>int64 count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 num = 2;</code>
     * @return int|string
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Generated from protobuf field <code>int64 num = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNum($var)
    {
        GPBUtil::checkInt64($var);
        $this->num = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 3;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 3;</code>
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
     * Generated from protobuf field <code>bytes nextKey = 4;</code>
     * @return string
     */
    public function getNextKey()
    {
        return $this->nextKey;
    }

    /**
     * Generated from protobuf field <code>bytes nextKey = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNextKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->nextKey = $var;

        return $this;
    }

}

