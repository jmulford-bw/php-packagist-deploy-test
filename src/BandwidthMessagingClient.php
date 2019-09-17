<?php
/*
 * BandwidthMessagingLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BandwidthMessagingLib;

use BandwidthMessagingLib\Controllers;

/**
 * BandwidthMessagingLib client class
 */
class BandwidthMessagingClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $user = null,
        $pass = null
    ) {
        Configuration::$user = $user ? $user : Configuration::$user;
        Configuration::$pass = $pass ? $pass : Configuration::$pass;
    }
    /**
     * Singleton access to API controller
     * @return Controllers\APIController The *Singleton* instance
     */
    public function getClient()
    {
        return Controllers\APIController::getInstance();
    }
}
