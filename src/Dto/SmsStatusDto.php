<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto;

class SmsStatusDto
{
    public function __construct(
        private readonly string $smsId,
        private readonly int $statusCode,
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
