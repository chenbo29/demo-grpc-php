<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: finance.proto

namespace Finance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finance.WechatConfig</code>
 */
class WechatConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string jsapi_ticket = 1;</code>
     */
    private $jsapi_ticket = '';
    /**
     * Generated from protobuf field <code>string signature = 2;</code>
     */
    private $signature = '';
    /**
     * Generated from protobuf field <code>string app_id = 3;</code>
     */
    private $app_id = '';
    /**
     * Generated from protobuf field <code>string noncestr = 4;</code>
     */
    private $noncestr = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $jsapi_ticket
     *     @type string $signature
     *     @type string $app_id
     *     @type string $noncestr
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Finance::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string jsapi_ticket = 1;</code>
     * @return string
     */
    public function getJsapiTicket()
    {
        return $this->jsapi_ticket;
    }

    /**
     * Generated from protobuf field <code>string jsapi_ticket = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setJsapiTicket($var)
    {
        GPBUtil::checkString($var, True);
        $this->jsapi_ticket = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string signature = 2;</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Generated from protobuf field <code>string signature = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, True);
        $this->signature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string app_id = 3;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Generated from protobuf field <code>string app_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string noncestr = 4;</code>
     * @return string
     */
    public function getNoncestr()
    {
        return $this->noncestr;
    }

    /**
     * Generated from protobuf field <code>string noncestr = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNoncestr($var)
    {
        GPBUtil::checkString($var, True);
        $this->noncestr = $var;

        return $this;
    }

}

