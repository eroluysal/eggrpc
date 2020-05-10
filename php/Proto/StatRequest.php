<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: stat.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>StatRequest</code>
 */
class StatRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>uint32 pid = 2;</code>
     */
    protected $pid = 0;
    /**
     * Generated from protobuf field <code>bool raw = 3;</code>
     */
    protected $raw = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type int $pid
     *     @type bool $raw
     * }
     */
    public function __construct($data = NULL) {
        \Proto\GPBMetadata\Stat::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 pid = 2;</code>
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Generated from protobuf field <code>uint32 pid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPid($var)
    {
        GPBUtil::checkUint32($var);
        $this->pid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool raw = 3;</code>
     * @return bool
     */
    public function getRaw()
    {
        return $this->raw;
    }

    /**
     * Generated from protobuf field <code>bool raw = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setRaw($var)
    {
        GPBUtil::checkBool($var);
        $this->raw = $var;

        return $this;
    }

}

