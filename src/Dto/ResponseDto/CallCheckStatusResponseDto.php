<?php

namespace Sun\SmsRu\Dto\ResponseDto;

class CallCheckStatusResponseDto extends BaseResponseDto
{
    private string $checkStatus;
    private string $checkStatusText;

    public function __construct(string $checkStatus, string $checkStatusText, string $status, int $statusCode)
    {
        parent::__construct($status, $statusCode);
        $this->checkStatus = $checkStatus;
        $this->checkStatusText = $checkStatusText;
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
