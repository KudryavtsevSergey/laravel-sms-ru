<?php

namespace Sun\SmsRu;

use Illuminate\Contracts\Config\Repository as Config;

class SmsRuConfig
{
    private Config $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function getGateway(): ?string
    {
        return $this->config->get('smsru.gateway');
    }

    public function getUsername(): ?string
    {
        return $this->config->get('smsru.username');
    }

    public function getPassword(): ?string
    {
        return $this->config->get('smsru.password');
    }

    public function getApiId(): ?string
    {
        return $this->config->get('smsru.api_id');
    }

    public function getAuthType(): ?string
    {
        return $this->config->get('smsru.auth_type');
    }
}
