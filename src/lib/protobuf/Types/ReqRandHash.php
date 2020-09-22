<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common.proto

namespace Chain33\Phpsdk\Lib\Protobuf\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>chain33.phpsdk.lib.protobuf.types.ReqRandHash</code>
 */
class ReqRandHash extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string execName = 1;</code>
     */
    private $execName = '';
    /**
     * Generated from protobuf field <code>int64 height = 2;</code>
     */
    private $height = 0;
    /**
     * Generated from protobuf field <code>int64 blockNum = 3;</code>
     */
    private $blockNum = 0;
    /**
     * Generated from protobuf field <code>bytes hash = 4;</code>
     */
    private $hash = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $execName
     *     @type int|string $height
     *     @type int|string $blockNum
     *     @type string $hash
     * }
     */
    public function __construct($data = NULL) {
        \chain33\phpsdk\lib\protobuf\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string execName = 1;</code>
     * @return string
     */
    public function getExecName()
    {
        return $this->execName;
    }

    /**
     * Generated from protobuf field <code>string execName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setExecName($var)
    {
        GPBUtil::checkString($var, True);
        $this->execName = $var;

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
     * Generated from protobuf field <code>int64 blockNum = 3;</code>
     * @return int|string
     */
    public function getBlockNum()
    {
        return $this->blockNum;
    }

    /**
     * Generated from protobuf field <code>int64 blockNum = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBlockNum($var)
    {
        GPBUtil::checkInt64($var);
        $this->blockNum = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes hash = 4;</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Generated from protobuf field <code>bytes hash = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash = $var;

        return $this;
    }

}

