<?php
/*
 * BandwidthMessagingLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BandwidthMessagingLib\Controllers;

use BandwidthMessagingLib\APIException;
use BandwidthMessagingLib\APIHelper;
use BandwidthMessagingLib\Configuration;
use BandwidthMessagingLib\Models;
use BandwidthMessagingLib\Exceptions;
use BandwidthMessagingLib\Http\HttpRequest;
use BandwidthMessagingLib\Http\HttpResponse;
use BandwidthMessagingLib\Http\HttpMethod;
use BandwidthMessagingLib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class APIController extends BaseController
{
    /**
     * @var APIController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return APIController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * listMedia
     *
     * @param string $userId             TODO: type description here
     * @param string $continuationToken  (optional) TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function listMedia(
        $userId,
        $continuationToken = null
    ) {

        //prepare query string for API call
        $_queryBuilder = '/users/{userId}/media';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'userId'             => $userId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'       => BaseController::USER_AGENT,
            'Accept'           => 'application/json',
            'Continuation-Token' => $continuationToken
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$user, Configuration::$pass);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\BandwidthException('400 request is malformed or invalid', $_httpContext);
        }

        if ($response->code == 401) {
            throw new Exceptions\BandwidthException(
                '401 The specified user does not have access to the account',
                $_httpContext
            );
        }

        if ($response->code == 403) {
            throw new Exceptions\BandwidthException('403  The user does not have access to the API', $_httpContext);
        }

        if ($response->code == 404) {
            throw new Exceptions\BandwidthNotFoundException(
                '404 he call-id is no longer active, or the path is not found',
                $_httpContext
            );
        }

        if ($response->code == 409) {
            throw new Exceptions\BandwidthException(
                '409 Error when modifying a call that is unable to be modified',
                $_httpContext
            );
        }

        if ($response->code == 415) {
            throw new Exceptions\BandwidthException('415 The content-type of the request is incorrect', $_httpContext);
        }

        if ($response->code == 429) {
            throw new Exceptions\BandwidthRateLimitErrorException(
                '429 The rate limit has been reached',
                $_httpContext
            );
        }

        if ($response->code == 500) {
            throw new Exceptions\BandwidthException('500 Unknown server error', $_httpContext);
        }

        if ($response->code == 503) {
            throw new Exceptions\BandwidthException('503 The service is unavailable for some reason', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClassArray($response->body, 'BandwidthMessagingLib\\Models\\Media');
    }

    /**
     * getMedia
     *
     * @param string $userId  TODO: type description here
     * @param string $mediaId TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getMedia(
        $userId,
        $mediaId
    ) {

        //prepare query string for API call
        $_queryBuilder = '/users/{userId}/media/{mediaId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'userId'  => $userId,
            'mediaId' => $mediaId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$user, Configuration::$pass);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\BandwidthException('400 request is malformed or invalid', $_httpContext);
        }

        if ($response->code == 401) {
            throw new Exceptions\BandwidthException(
                '401 The specified user does not have access to the account',
                $_httpContext
            );
        }

        if ($response->code == 403) {
            throw new Exceptions\BandwidthException('403  The user does not have access to the API', $_httpContext);
        }

        if ($response->code == 404) {
            throw new Exceptions\BandwidthNotFoundException(
                '404 he call-id is no longer active, or the path is not found',
                $_httpContext
            );
        }

        if ($response->code == 409) {
            throw new Exceptions\BandwidthException(
                '409 Error when modifying a call that is unable to be modified',
                $_httpContext
            );
        }

        if ($response->code == 415) {
            throw new Exceptions\BandwidthException('415 The content-type of the request is incorrect', $_httpContext);
        }

        if ($response->code == 429) {
            throw new Exceptions\BandwidthRateLimitErrorException(
                '429 The rate limit has been reached',
                $_httpContext
            );
        }

        if ($response->code == 500) {
            throw new Exceptions\BandwidthException('500 Unknown server error', $_httpContext);
        }

        if ($response->code == 503) {
            throw new Exceptions\BandwidthException('503 The service is unavailable for some reason', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * uploadMedia
     *
     * @param string  $userId         TODO: type description here
     * @param string  $mediaId        TODO: type description here
     * @param integer $contentLength  TODO: type description here
     * @param string  $body           TODO: type description here
     * @param string  $contentType    (optional) TODO: type description here
     * @param string  $cacheControl   (optional) TODO: type description here
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function uploadMedia(
        $userId,
        $mediaId,
        $contentLength,
        $body,
        $contentType = null,
        $cacheControl = null
    ) {

        //prepare query string for API call
        $_queryBuilder = '/users/{userId}/media/{mediaId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'userId'         => $userId,
            'mediaId'        => $mediaId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Content-Length'  => $contentLength,
            'Content-Type'    => $contentType,
            'Cache-Control'   => $cacheControl
        );

        //json encode body
        $_bodyJson = $body;

        //set HTTP basic auth parameters
        Request::auth(Configuration::$user, Configuration::$pass);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers, $_bodyJson);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\BandwidthException('400 request is malformed or invalid', $_httpContext);
        }

        if ($response->code == 401) {
            throw new Exceptions\BandwidthException(
                '401 The specified user does not have access to the account',
                $_httpContext
            );
        }

        if ($response->code == 403) {
            throw new Exceptions\BandwidthException('403  The user does not have access to the API', $_httpContext);
        }

        if ($response->code == 404) {
            throw new Exceptions\BandwidthNotFoundException(
                '404 he call-id is no longer active, or the path is not found',
                $_httpContext
            );
        }

        if ($response->code == 409) {
            throw new Exceptions\BandwidthException(
                '409 Error when modifying a call that is unable to be modified',
                $_httpContext
            );
        }

        if ($response->code == 415) {
            throw new Exceptions\BandwidthException('415 The content-type of the request is incorrect', $_httpContext);
        }

        if ($response->code == 429) {
            throw new Exceptions\BandwidthRateLimitErrorException(
                '429 The rate limit has been reached',
                $_httpContext
            );
        }

        if ($response->code == 500) {
            throw new Exceptions\BandwidthException('500 Unknown server error', $_httpContext);
        }

        if ($response->code == 503) {
            throw new Exceptions\BandwidthException('503 The service is unavailable for some reason', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }

    /**
     * deleteMedia
     *
     * @param string $userId  TODO: type description here
     * @param string $mediaId TODO: type description here
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteMedia(
        $userId,
        $mediaId
    ) {

        //prepare query string for API call
        $_queryBuilder = '/users/{userId}/media/{mediaId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'userId'  => $userId,
            'mediaId' => $mediaId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$user, Configuration::$pass);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\BandwidthException('400 request is malformed or invalid', $_httpContext);
        }

        if ($response->code == 401) {
            throw new Exceptions\BandwidthException(
                '401 The specified user does not have access to the account',
                $_httpContext
            );
        }

        if ($response->code == 403) {
            throw new Exceptions\BandwidthException('403  The user does not have access to the API', $_httpContext);
        }

        if ($response->code == 404) {
            throw new Exceptions\BandwidthNotFoundException(
                '404 he call-id is no longer active, or the path is not found',
                $_httpContext
            );
        }

        if ($response->code == 409) {
            throw new Exceptions\BandwidthException(
                '409 Error when modifying a call that is unable to be modified',
                $_httpContext
            );
        }

        if ($response->code == 415) {
            throw new Exceptions\BandwidthException('415 The content-type of the request is incorrect', $_httpContext);
        }

        if ($response->code == 429) {
            throw new Exceptions\BandwidthRateLimitErrorException(
                '429 The rate limit has been reached',
                $_httpContext
            );
        }

        if ($response->code == 500) {
            throw new Exceptions\BandwidthException('500 Unknown server error', $_httpContext);
        }

        if ($response->code == 503) {
            throw new Exceptions\BandwidthException('503 The service is unavailable for some reason', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }

    /**
     * createMessage
     *
     * @param string                $userId TODO: type description here
     * @param Models\MessageRequest $body   (optional) TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createMessage(
        $userId,
        $body = null
    ) {

        //prepare query string for API call
        $_queryBuilder = '/users/{userId}/messages';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'userId' => $userId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //json encode body
        $_bodyJson = Request\Body::Json($body);

        //set HTTP basic auth parameters
        Request::auth(Configuration::$user, Configuration::$pass);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, $_bodyJson);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\BandwidthException('400 request is malformed or invalid', $_httpContext);
        }

        if ($response->code == 401) {
            throw new Exceptions\BandwidthException(
                '401 The specified user does not have access to the account',
                $_httpContext
            );
        }

        if ($response->code == 403) {
            throw new Exceptions\BandwidthException('403  The user does not have access to the API', $_httpContext);
        }

        if ($response->code == 404) {
            throw new Exceptions\BandwidthNotFoundException(
                '404 he call-id is no longer active, or the path is not found',
                $_httpContext
            );
        }

        if ($response->code == 409) {
            throw new Exceptions\BandwidthException(
                '409 Error when modifying a call that is unable to be modified',
                $_httpContext
            );
        }

        if ($response->code == 415) {
            throw new Exceptions\BandwidthException('415 The content-type of the request is incorrect', $_httpContext);
        }

        if ($response->code == 429) {
            throw new Exceptions\BandwidthRateLimitErrorException(
                '429 The rate limit has been reached',
                $_httpContext
            );
        }

        if ($response->code == 500) {
            throw new Exceptions\BandwidthException('500 Unknown server error', $_httpContext);
        }

        if ($response->code == 503) {
            throw new Exceptions\BandwidthException('503 The service is unavailable for some reason', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'BandwidthMessagingLib\\Models\\DeferredResultResponseEntityMessage');
    }
}
