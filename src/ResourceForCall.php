<?php

namespace QuantumCA\DNSPod;

use QuantumCA\DNSPod\DNSPod;
use QuantumCA\DNSPod\Traits\CanRequest;

class ResourceForCall
{
    use CanRequest;

    /**
     * DNSPod 秘钥 ID
     * @var DNSPod
     */
    protected $sdk;

    /**
     * @var string
     */
    protected $resource;

    /**
     * @var string
     */
    protected $domain;

    /**
     * 实例化
     * @param DNSPod $sdk
     * @param string $domain
     */
    public function __construct($sdk, $resource, $domain)
    {
        $this->sdk = $sdk;
        $this->resource = $resource;
        $this->domain = $domain;
        $this->constructor_arguments = ['domain' => $domain,];
    }
}
