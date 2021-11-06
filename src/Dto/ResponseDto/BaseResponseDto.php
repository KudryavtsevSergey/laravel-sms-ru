<?php

namespace Sun\SmsRu\Dto\ResponseDto;

class BaseResponseDto implements ResponseDtoInterface
{
    private string $status;
    private int $statusCode;

    public function __construct(string $status, int $statusCode)
    {
        $this->status = $status;
        $this->statusCode = $statusCode;
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
