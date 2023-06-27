<?php

declare(strict_types=1);

namespace Sun\SmsRu\Auth;

class ApiIdAuth implements AuthInterface
{
    public function __construct(
        private string $apiId,
    ) {
    }

    public function getAuthParams(): array
    {
        return [
            'api_id' => $this->apiId,
        ];
    }

    public function getApiId(): string
    {
        return $this->apiId;
    }
}
