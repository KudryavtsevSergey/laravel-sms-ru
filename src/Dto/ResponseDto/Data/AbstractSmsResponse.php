<?php

namespace Sun\SmsRu\Dto\ResponseDto\Data;

abstract class AbstractSmsResponse
{
    public function __construct(
        private string $number,
        private string $status,
        private int $statusCode,
        private ?string $statusText = null,
    ) {
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
