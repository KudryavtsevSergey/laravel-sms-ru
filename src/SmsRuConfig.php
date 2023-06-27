<?php

declare(strict_types=1);

namespace Sun\SmsRu;

use Illuminate\Contracts\Config\Repository;

class SmsRuConfig
{
    public function __construct(
        private Repository $config,
    ) {
    }

    public function getGateway(): string
    {
        return $this->config->get('smsru.gateway');
    }

    public function getUsername(): string
    {
        return $this->config->get('smsru.username');
    }

    public function getPassword(): string
    {
        return $this->config->get('smsru.password');
    }

    public function getApiId(): string
    {
        return $this->config->get('smsru.api_id');
    }

    public function getAuthType(): ?string
    {
        return $this->config->get('smsru.auth_type');
    }
}
