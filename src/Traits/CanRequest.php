<?php

namespace QuantumCA\DNSPod\Traits;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use QuantumCA\DNSPod;
use QuantumCA\DNSPod\Exceptions\RequestException;

/**
 * @property DNSPod $sdk
 */
trait CanRequest
{
    public $http;

    /**
     * @var array
     */
    public $constructor_arguments;

    /**
     * @return Client 
     */
    protected function getHttpClient()
    {
        if (!$this->http) {
            $this->http = new Client([
                'base_uri' => $this->sdk->base_uri,
            ]);
        }

        return $this->http;
    }

    public function __call($method, $arguments)
    {
        $method = ucfirst($method);

        $call = $this->getHttpClient()->post(join('.', [ucfirst($this->resource), $method]), [
            RequestOptions::FORM_PARAMS => array_merge($this->constructor_arguments, $arguments[0], ['format' => 'json', 'login_token' => $this->sdk->getAuthorizationValue(),]),
        ]);
        $json = json_decode($call->getBody()->__toString());

        if ($call->getStatusCode() != 200 || !isset($json->status->code) || $json->status->code != 1) {
            if (json_last_error() != JSON_ERROR_NONE || !isset($json->status->message) || !isset($json->status->code)) {
                throw new RequestException($call->getReasonPhrase(), $call->getStatusCode());
            }
            throw new RequestException($json->status->message, $json->status->code);
        }

        return $json;
    }
}
