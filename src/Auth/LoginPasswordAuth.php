<?php

declare(strict_types=1);

namespace Sun\SmsRu\Auth;

class LoginPasswordAuth implements AuthInterface
{
    public function __construct(
        private readonly string $login,
        private readonly string $password,
    ) {
    }

    public function getAuthParams(): array
    {
        return [
            'login' => $this->login,
            'password' => $this->password,
        ];
    }
}
