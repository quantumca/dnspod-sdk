<?php

namespace QuantumCA\DNSPod\Domain;

use QuantumCA\DNSPod;
use QuantumCA\DNSPod\Traits\CanRequest;

/**
 * @method \QuantumCA\DNSPod\Responses\Domain\Info info(array $parameters) 获取域名信息 @see https://docs.dnspod.cn/api/5f5624e9e75cf42d25bf67ac/
 */
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
