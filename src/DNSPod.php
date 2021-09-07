<?php

namespace QuantumCA;

class DNSPod
{
    /**
     * DNSPod 秘钥 ID
     * @var int|string
     */
    protected $id;

    /**
     * DNSPod 秘钥 Token
     * @var string
     */
    protected $token;

    public $base_uri = 'https://dnsapi.cn/';

    /**
     * 实例化
     * @param int|string $id
     * @param string $token
     * 
     * @see https://console.dnspod.cn/account/token/token
     */
    public function __construct($id, $token)
    {
        $this->id = $id;
        $this->token = $token;
    }

    /**
     * 域名
     * @param string $domain 
     * @return QuantumCA\Domain\Domain 
     */
    public function domain($domain)
    {
        return new Domain\Domain($this, $domain);
    }

    /**
     * 获取鉴权字串
     * @return string
     */
    public function getAuthorizationValue() 
    {
        return join(',', [$this->id, $this->token,]);
    }
}
