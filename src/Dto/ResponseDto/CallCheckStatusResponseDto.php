<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\ResponseDto;

class CallCheckStatusResponseDto extends BaseResponseDto
{
    public function __construct(
        private string $checkStatus,
        private string $checkStatusText,
        string $status,
        int $statusCode,
    ) {
        parent::__construct($status, $statusCode);
    }

    public function getCheckStatus(): string
    {
        return $this->checkStatus;
    }

    public function getCheckStatusText(): string
    {
        return $this->checkStatusText;
    }
}
