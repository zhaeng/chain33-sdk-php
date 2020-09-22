<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common.proto

namespace Chain33\Phpsdk\Lib\Protobuf\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>chain33.phpsdk.lib.protobuf.types.ReqHash</code>
 */
class ReqHash extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes hash = 1;</code>
     */
    private $hash = '';
    /**
     * Generated from protobuf field <code>bool upgrade = 2;</code>
     */
    private $upgrade = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hash
     *     @type bool $upgrade
     * }
     */
    public function __construct($data = NULL) {
        \chain33\phpsdk\lib\protobuf\Common::initOnce();
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
     * Generated from protobuf field <code>bool upgrade = 2;</code>
     * @return bool
     */
    public function getUpgrade()
    {
        return $this->upgrade;
    }

    /**
     * Generated from protobuf field <code>bool upgrade = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setUpgrade($var)
    {
        GPBUtil::checkBool($var);
        $this->upgrade = $var;

        return $this;
    }

}

