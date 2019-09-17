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
class FieldError implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $fieldName public property
     */
    public $fieldName;

    /**
     * @todo Write general description for this property
     * @var string|null $description public property
     */
    public $description;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $fieldName   Initialization value for $this->fieldName
     * @param string $description Initialization value for $this->description
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->fieldName   = func_get_arg(0);
            $this->description = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['fieldName']   = $this->fieldName;
        $json['description'] = $this->description;

        return $json;
    }
}
