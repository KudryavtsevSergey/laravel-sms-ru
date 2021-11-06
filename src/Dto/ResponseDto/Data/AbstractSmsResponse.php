<?php

namespace Sun\SmsRu\Dto\ResponseDto\Data;

abstract class AbstractSmsResponse
{
    private string $number;
    private string $status;
    private int $statusCode;
    private ?string $statusText;

    public function __construct(
        string $number,
        string $status,
        int $statusCode,
        ?string $statusText = null
    ) {
        $this->number = $number;
        $this->status = $status;
        $this->statusCode = $statusCode;
        $this->statusText = $statusText;
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
