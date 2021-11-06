<?php

namespace Sun\SmsRu\Service;

use Sun\SmsRu\Auth\ApiIdAuth;
use Sun\SmsRu\Auth\AuthInterface;
use Sun\SmsRu\Auth\LoginPasswordAuth;
use Sun\SmsRu\Auth\LoginPasswordSecureAuth;
use Sun\SmsRu\Enum\AuthTypeEnum;
use Sun\SmsRu\SmsRuConfig;

class AuthFactory
{
    private SmsRuConfig $config;

    public function __construct(SmsRuConfig $config)
    {
        $this->config = $config;
    }

    public function createAuth(): AuthInterface
    {
        switch ($this->config->getAuthType()) {
            case AuthTypeEnum::API_ID:
                return new ApiIdAuth($this->config->getApiId());
            case AuthTypeEnum::LOGIN_PASSWORD:
                return new LoginPasswordAuth($this->config->getUsername(), $this->config->getPassword());
            case AuthTypeEnum::LOGIN_PASSWORD_SECURE:
                return new LoginPasswordSecureAuth(
                    $this->config->getUsername(),
                    $this->config->getPassword(),
                    $this->config->getApiId(),
                    $this->config->getGateway()
                );
            default:
                throw AuthTypeEnum::invalidValue($this->config->getAuthType());
        }
    }
}
