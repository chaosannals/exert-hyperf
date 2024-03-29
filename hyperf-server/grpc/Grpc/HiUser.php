<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grpc.proto

namespace Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>grpc.HiUser</code>
 */
class HiUser extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>int32 sex = 2;</code>
     */
    protected $sex = 0;
    /**
     * Generated from protobuf field <code>bytes file = 3;</code>
     */
    protected $file = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type int $sex
     *     @type string $file
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 sex = 2;</code>
     * @return int
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Generated from protobuf field <code>int32 sex = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSex($var)
    {
        GPBUtil::checkInt32($var);
        $this->sex = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes file = 3;</code>
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Generated from protobuf field <code>bytes file = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFile($var)
    {
        GPBUtil::checkString($var, False);
        $this->file = $var;

        return $this;
    }

}

