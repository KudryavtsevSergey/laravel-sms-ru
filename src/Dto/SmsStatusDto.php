<?php

namespace Sun\SmsRu\Dto;

class SmsStatusDto
{
    public function __construct(
        private string $smsId,
        private int $statusCode,
    ) {
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
