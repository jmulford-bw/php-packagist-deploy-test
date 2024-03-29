<?php
/*
 * BandwidthMessagingLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BandwidthMessagingLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class DeferredResult implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var object|null $result public property
     */
    public $result;

    /**
     * @todo Write general description for this property
     * @var bool|null $setOrExpired public property
     */
    public $setOrExpired;

    /**
     * Constructor to set initial or default values of member properties
     * @param object $result       Initialization value for $this->result
     * @param bool   $setOrExpired Initialization value for $this->setOrExpired
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->result       = func_get_arg(0);
            $this->setOrExpired = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['result']       = $this->result;
        $json['setOrExpired'] = $this->setOrExpired;

        return $json;
    }
}
