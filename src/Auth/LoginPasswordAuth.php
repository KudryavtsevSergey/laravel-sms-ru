<?php

namespace Sun\SmsRu\Auth;

class LoginPasswordAuth implements AuthInterface
{
    public function __construct(
        private string $login,
        private string $password,
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
