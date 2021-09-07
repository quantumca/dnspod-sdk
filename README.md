# DNSPod-sdk

DNSPod.cn 的 PHP SDK

## 安装

```shell
composer require quantumca/dnspod
```

## 使用

完整的 API 列表： [https://docs.dnspod.cn/api/5f5620a2e75cf42d25bf6745/](https://docs.dnspod.cn/api/5f5620a2e75cf42d25bf6745/)
```php
$sdk = new QuantumCA\DNSPod\DNSPod('id', 'token'); // id 和 token 可以在 https://console.dnspod.cn/account/token/token 生成个
$sdk->domain('domain.com')->create(); // https://docs.dnspod.cn/api/5f562674e75cf42d25bf6817/
```

## 授权

MIT