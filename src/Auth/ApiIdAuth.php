<?php

namespace Sun\SmsRu\Auth;

class ApiIdAuth implements AuthInterface
{
    private string $apiId;

    public function __construct(string $apiId)
    {
        $this->apiId = $apiId;
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
