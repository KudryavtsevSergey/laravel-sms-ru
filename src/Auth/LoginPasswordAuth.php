<?php

namespace Sun\SmsRu\Auth;

class LoginPasswordAuth implements AuthInterface
{
    private string $login;
    private string $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getAuthParams(): array
    {
        return [
            'login' => $this->login,
            'password' => $this->password,
        ];
    }
}
