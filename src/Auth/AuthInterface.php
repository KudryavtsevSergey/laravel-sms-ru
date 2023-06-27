<?php

declare(strict_types=1);

namespace Sun\SmsRu\Auth;

interface AuthInterface
{
    public function getAuthParams(): array;
}
