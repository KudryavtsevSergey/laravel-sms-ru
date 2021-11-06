<?php

namespace Sun\SmsRu\Auth;

use Sun\SmsRu\Enum\ApiEnum;

class LoginPasswordSecureAuth implements AuthInterface
{
    private string $login;
    private string $password;
    private ?string $apiId;
    private string $gateway;

    public function __construct(
        string $login,
        string $password,
        ?string $apiId,
        string $gateway
    ) {
        $this->login = $login;
        $this->password = $password;
        $this->apiId = $apiId;
        $this->gateway = $gateway;
    }

    public function getAuthParams(): array
    {
        $token = $this->requestAuthToken();
        $data = sprintf('%s%s%s', $this->password, $token, $this->apiId);

        return [
            'login' => $this->login,
            'token' => $token,
            'sha512' => hash('sha512', $data),
        ];
    }

    public function getApiId(): ?string
    {
        return $this->apiId;
    }

    private function requestAuthToken(): string
    {
        $uri = sprintf('%s/%s', $this->gateway, ApiEnum::AUTH_GET_TOKEN);
        return file_get_contents($uri);
    }
}
