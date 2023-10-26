<?php

declare(strict_types=1);

namespace Sun\SmsRu\Service;

use Sun\SmsRu\Auth\ApiIdAuth;
use Sun\SmsRu\Auth\AuthInterface;
use Sun\SmsRu\Auth\LoginPasswordAuth;
use Sun\SmsRu\Auth\LoginPasswordSecureAuth;
use Sun\SmsRu\Enum\AuthTypeEnum;
use Sun\SmsRu\SmsRuConfig;

class AuthFactory
{
    public function __construct(
        private readonly SmsRuConfig $config,
    ) {
    }

    public function createAuth(): AuthInterface
    {
        return match ($this->config->getAuthType()) {
            AuthTypeEnum::API_ID => new ApiIdAuth($this->config->getApiId()),
            AuthTypeEnum::LOGIN_PASSWORD => new LoginPasswordAuth($this->config->getUsername(),
                $this->config->getPassword()),
            AuthTypeEnum::LOGIN_PASSWORD_SECURE => new LoginPasswordSecureAuth(
                $this->config->getUsername(),
                $this->config->getPassword(),
                $this->config->getApiId(),
                $this->config->getGateway()
            ),
            default => throw AuthTypeEnum::invalidValue($this->config->getAuthType()),
        };
    }
}
