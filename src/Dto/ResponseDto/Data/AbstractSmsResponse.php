<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\ResponseDto\Data;

use Sun\SmsRu\Enum\SmsStatusEnum;

abstract class AbstractSmsResponse
{
    public function __construct(
        private readonly string $number,
        private readonly string $status,
        private readonly int $statusCode,
        private readonly ?string $statusText = null,
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
