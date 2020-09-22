<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transaction.proto

namespace Chain33\Phpsdk\Lib\Protobuf\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>chain33.phpsdk.lib.protobuf.types.ReplyProperFee</code>
 */
class ReplyProperFee extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 properFee = 1;</code>
     */
    private $properFee = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $properFee
     * }
     */
    public function __construct($data = NULL) {
        \chain33\phpsdk\lib\protobuf\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 properFee = 1;</code>
     * @return int|string
     */
    public function getProperFee()
    {
        return $this->properFee;
    }

    /**
     * Generated from protobuf field <code>int64 properFee = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setProperFee($var)
    {
        GPBUtil::checkInt64($var);
        $this->properFee = $var;

        return $this;
    }

}

