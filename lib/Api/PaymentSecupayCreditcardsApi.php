<?php
/**
 * PaymentSecupayCreditcardsApi
 * PHP version 5
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SecuConnect API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Secuconnect\Client\Api;

use \Secuconnect\Client\ApiClient;
use \Secuconnect\Client\ApiException;
use \Secuconnect\Client\Configuration;
use \Secuconnect\Client\ObjectSerializer;

/**
 * PaymentSecupayCreditcardsApi Class Doc Comment
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentSecupayCreditcardsApi
{
    /**
     * API Client
     *
     * @var \Secuconnect\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Secuconnect\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Secuconnect\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Secuconnect\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Secuconnect\Client\ApiClient $apiClient set the API client
     *
     * @return PaymentSecupayCreditcardsApi
     */
    public function setApiClient(\Secuconnect\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation paymentSecupayCreditcardsCancelById
     *
     * @param string $hash Transaction hash (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return object
     */
    public function paymentSecupayCreditcardsCancelById($hash)
    {
        list($response) = $this->paymentSecupayCreditcardsCancelByIdWithHttpInfo($hash);
        return $response;
    }

    /**
     * Operation paymentSecupayCreditcardsCancelByIdWithHttpInfo
     *
     * @param string $hash Transaction hash (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentSecupayCreditcardsCancelByIdWithHttpInfo($hash)
    {
        // verify the required parameter 'hash' is set
        if ($hash === null) {
            throw new \InvalidArgumentException('Missing the required parameter $hash when calling paymentSecupayCreditcardsCancelById');
        }
        // parse inputs
        $resourcePath = "Payment/Secupaycreditcards/{hash}/cancel";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($hash !== null) {
            $resourcePath = str_replace(
                "{" . "hash" . "}",
                $this->apiClient->getSerializer()->toPathValue($hash),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                'Payment/Secupaycreditcards/{hash}/cancel'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ProductExceptionPayload', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation paymentSecupayCreditcardsGetById
     *
     * @param string $hash Payment transaction ID (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModel
     */
    public function paymentSecupayCreditcardsGetById($hash)
    {
        list($response) = $this->paymentSecupayCreditcardsGetByIdWithHttpInfo($hash);
        return $response;
    }

    /**
     * Operation paymentSecupayCreditcardsGetByIdWithHttpInfo
     *
     * @param string $hash Payment transaction ID (required)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SecupayTransactionProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentSecupayCreditcardsGetByIdWithHttpInfo($hash)
    {
        // verify the required parameter 'hash' is set
        if ($hash === null) {
            throw new \InvalidArgumentException('Missing the required parameter $hash when calling paymentSecupayCreditcardsGetById');
        }
        // parse inputs
        $resourcePath = "Payment/Secupaycreditcards/{hash}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($hash !== null) {
            $resourcePath = str_replace(
                "{" . "hash" . "}",
                $this->apiClient->getSerializer()->toPathValue($hash),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Secuconnect\Client\Model\SecupayTransactionProductModel',
                'Payment/Secupaycreditcards/{hash}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SecupayTransactionProductModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SecupayTransactionProductModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\ProductExceptionPayload', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation paymentSecupaycreditcardsPost
     *
     * @param \Secuconnect\Client\Model\SecupayTransactionProductDTO $body Credit card payment transaction input properties (optional)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return \Secuconnect\Client\Model\SecupayTransactionProductModel
     */
    public function paymentSecupaycreditcardsPost($body = null)
    {
        list($response) = $this->paymentSecupaycreditcardsPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation paymentSecupaycreditcardsPostWithHttpInfo
     *
     * @param \Secuconnect\Client\Model\SecupayTransactionProductDTO $body Credit card payment transaction input properties (optional)
     * @throws \Secuconnect\Client\ApiException on non-2xx response
     * @return array of \Secuconnect\Client\Model\SecupayTransactionProductModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentSecupaycreditcardsPostWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "Payment/Secupaycreditcards";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Secuconnect\Client\Model\SecupayTransactionProductModel',
                'Payment/Secupaycreditcards'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Secuconnect\Client\Model\SecupayTransactionProductModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Secuconnect\Client\Model\SecupayTransactionProductModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
