<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transaction.proto

namespace Chain33\Phpsdk\Lib\Protobuf\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>chain33.phpsdk.lib.protobuf.types.ReplyTxInfo</code>
 */
class ReplyTxInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes hash = 1;</code>
     */
    private $hash = '';
    /**
     * Generated from protobuf field <code>int64 height = 2;</code>
     */
    private $height = 0;
    /**
     * Generated from protobuf field <code>int64 index = 3;</code>
     */
    private $index = 0;
    /**
     * Generated from protobuf field <code>repeated .chain33.phpsdk.lib.protobuf.types.Asset assets = 4;</code>
     */
    private $assets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hash
     *     @type int|string $height
     *     @type int|string $index
     *     @type \Chain33\Phpsdk\Lib\Protobuf\Types\Asset[]|\Google\Protobuf\Internal\RepeatedField $assets
     * }
     */
    public function __construct($data = NULL) {
        \chain33\phpsdk\lib\protobuf\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes hash = 1;</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Generated from protobuf field <code>bytes hash = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 height = 2;</code>
     * @return int|string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Generated from protobuf field <code>int64 height = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->height = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 index = 3;</code>
     * @return int|string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>int64 index = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkInt64($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .chain33.phpsdk.lib.protobuf.types.Asset assets = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * Generated from protobuf field <code>repeated .chain33.phpsdk.lib.protobuf.types.Asset assets = 4;</code>
     * @param \Chain33\Phpsdk\Lib\Protobuf\Types\Asset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Chain33\Phpsdk\Lib\Protobuf\Types\Asset::class);
        $this->assets = $arr;

        return $this;
    }

}
