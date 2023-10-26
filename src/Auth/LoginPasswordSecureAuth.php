<?php

declare(strict_types=1);

namespace Sun\SmsRu\Auth;

use Sun\SmsRu\Constant\ApiConstant;
use Sun\SmsRu\Exceptions\InternalError;

class LoginPasswordSecureAuth implements AuthInterface
{
    public function __construct(
        private readonly string $login,
        private readonly string $password,
        private readonly ?string $apiId,
        private readonly string $gateway,
    ) {
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

    private function requestAuthToken(): string
    {
        $uri = sprintf('%s/%s', $this->gateway, ApiConstant::AUTH_GET_TOKEN);
        return file_get_contents($uri) ?: throw new InternalError('Error getting token');
    }
}
