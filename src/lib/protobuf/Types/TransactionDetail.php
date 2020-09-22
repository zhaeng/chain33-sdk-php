<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transaction.proto

namespace Chain33\Phpsdk\Lib\Protobuf\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>chain33.phpsdk.lib.protobuf.types.TransactionDetail</code>
 */
class TransactionDetail extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.chain33.phpsdk.lib.protobuf.types.Transaction tx = 1;</code>
     */
    private $tx = null;
    /**
     * Generated from protobuf field <code>.chain33.phpsdk.lib.protobuf.types.ReceiptData receipt = 2;</code>
     */
    private $receipt = null;
    /**
     * Generated from protobuf field <code>repeated bytes proofs = 3;</code>
     */
    private $proofs;
    /**
     * Generated from protobuf field <code>int64 height = 4;</code>
     */
    private $height = 0;
    /**
     * Generated from protobuf field <code>int64 index = 5;</code>
     */
    private $index = 0;
    /**
     * Generated from protobuf field <code>int64 blocktime = 6;</code>
     */
    private $blocktime = 0;
    /**
     * Generated from protobuf field <code>int64 amount = 7;</code>
     */
    private $amount = 0;
    /**
     * Generated from protobuf field <code>string fromaddr = 8;</code>
     */
    private $fromaddr = '';
    /**
     * Generated from protobuf field <code>string actionName = 9;</code>
     */
    private $actionName = '';
    /**
     * Generated from protobuf field <code>repeated .chain33.phpsdk.lib.protobuf.types.Asset assets = 10;</code>
     */
    private $assets;
    /**
     * Generated from protobuf field <code>repeated .chain33.phpsdk.lib.protobuf.types.TxProof txProofs = 11;</code>
     */
    private $txProofs;
    /**
     * Generated from protobuf field <code>bytes fullHash = 12;</code>
     */
    private $fullHash = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Chain33\Phpsdk\Lib\Protobuf\Types\Transaction $tx
     *     @type \Chain33\Phpsdk\Lib\Protobuf\Types\ReceiptData $receipt
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $proofs
     *     @type int|string $height
     *     @type int|string $index
     *     @type int|string $blocktime
     *     @type int|string $amount
     *     @type string $fromaddr
     *     @type string $actionName
     *     @type \Chain33\Phpsdk\Lib\Protobuf\Types\Asset[]|\Google\Protobuf\Internal\RepeatedField $assets
     *     @type \Chain33\Phpsdk\Lib\Protobuf\Types\TxProof[]|\Google\Protobuf\Internal\RepeatedField $txProofs
     *     @type string $fullHash
     * }
     */
    public function __construct($data = NULL) {
        \chain33\phpsdk\lib\protobuf\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.chain33.phpsdk.lib.protobuf.types.Transaction tx = 1;</code>
     * @return \Chain33\Phpsdk\Lib\Protobuf\Types\Transaction
     */
    public function getTx()
    {
        return $this->tx;
    }

    /**
     * Generated from protobuf field <code>.chain33.phpsdk.lib.protobuf.types.Transaction tx = 1;</code>
     * @param \Chain33\Phpsdk\Lib\Protobuf\Types\Transaction $var
     * @return $this
     */
    public function setTx($var)
    {
        GPBUtil::checkMessage($var, \Chain33\Phpsdk\Lib\Protobuf\Types\Transaction::class);
        $this->tx = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.chain33.phpsdk.lib.protobuf.types.ReceiptData receipt = 2;</code>
     * @return \Chain33\Phpsdk\Lib\Protobuf\Types\ReceiptData
     */
    public function getReceipt()
    {
        return $this->receipt;
    }

    /**
     * Generated from protobuf field <code>.chain33.phpsdk.lib.protobuf.types.ReceiptData receipt = 2;</code>
     * @param \Chain33\Phpsdk\Lib\Protobuf\Types\ReceiptData $var
     * @return $this
     */
    public function setReceipt($var)
    {
        GPBUtil::checkMessage($var, \Chain33\Phpsdk\Lib\Protobuf\Types\ReceiptData::class);
        $this->receipt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes proofs = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProofs()
    {
        return $this->proofs;
    }

    /**
     * Generated from protobuf field <code>repeated bytes proofs = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProofs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->proofs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 height = 4;</code>
     * @return int|string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Generated from protobuf field <code>int64 height = 4;</code>
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
     * Generated from protobuf field <code>int64 index = 5;</code>
     * @return int|string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>int64 index = 5;</code>
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
     * Generated from protobuf field <code>int64 blocktime = 6;</code>
     * @return int|string
     */
    public function getBlocktime()
    {
        return $this->blocktime;
    }

    /**
     * Generated from protobuf field <code>int64 blocktime = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBlocktime($var)
    {
        GPBUtil::checkInt64($var);
        $this->blocktime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 7;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 7;</code>
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
     * Generated from protobuf field <code>string fromaddr = 8;</code>
     * @return string
     */
    public function getFromaddr()
    {
        return $this->fromaddr;
    }

    /**
     * Generated from protobuf field <code>string fromaddr = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setFromaddr($var)
    {
        GPBUtil::checkString($var, True);
        $this->fromaddr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string actionName = 9;</code>
     * @return string
     */
    public function getActionName()
    {
        return $this->actionName;
    }

    /**
     * Generated from protobuf field <code>string actionName = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setActionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->actionName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .chain33.phpsdk.lib.protobuf.types.Asset assets = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * Generated from protobuf field <code>repeated .chain33.phpsdk.lib.protobuf.types.Asset assets = 10;</code>
     * @param \Chain33\Phpsdk\Lib\Protobuf\Types\Asset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Chain33\Phpsdk\Lib\Protobuf\Types\Asset::class);
        $this->assets = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .chain33.phpsdk.lib.protobuf.types.TxProof txProofs = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTxProofs()
    {
        return $this->txProofs;
    }

    /**
     * Generated from protobuf field <code>repeated .chain33.phpsdk.lib.protobuf.types.TxProof txProofs = 11;</code>
     * @param \Chain33\Phpsdk\Lib\Protobuf\Types\TxProof[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTxProofs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Chain33\Phpsdk\Lib\Protobuf\Types\TxProof::class);
        $this->txProofs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes fullHash = 12;</code>
     * @return string
     */
    public function getFullHash()
    {
        return $this->fullHash;
    }

    /**
     * Generated from protobuf field <code>bytes fullHash = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setFullHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->fullHash = $var;

        return $this;
    }

}

