<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\ResponseDto\Data;

use Sun\SmsRu\Enum\SmsStatusEnum;

abstract class AbstractSmsResponse
{
    public function __construct(
        private string $number,
        private string $status,
        private int $statusCode,
        private ?string $statusText = null,
    ) {
        SmsStatusEnum::checkAllowedValue($statusCode);
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function getStatusText(): ?string
    {
        return $this->statusText;
    }
}
