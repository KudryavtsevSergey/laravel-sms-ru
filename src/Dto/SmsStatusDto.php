<?php

namespace Sun\SmsRu\Dto;

class SmsStatusDto
{
    private string $smsId;
    private int $statusCode;

    public function __construct(string $smsId, int $statusCode)
    {
        $this->smsId = $smsId;
        $this->statusCode = $statusCode;
    }

    public function getSmsId(): string
    {
        return $this->smsId;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
