<?php

namespace QuantumCA\Domain;

use QuantumCA\DNSPod;
use QuantumCA\Traits\CanRequest;

class Domain
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
    protected $domain;


    /**
     * 实例化
     * @param DNSPod $sdk
     * @param string $domain
     */
    public function __construct($sdk, $domain)
    {
        $this->sdk = $sdk;
        $this->domain = $domain;
        $this->constructor_arguments = ['domain' => $domain,];
    }
}
