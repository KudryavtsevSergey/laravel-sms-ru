<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\ResponseDto;

class BaseResponseDto implements ResponseDtoInterface
{
    public function __construct(
        private string $status,
        private int $statusCode,
    ) {
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
