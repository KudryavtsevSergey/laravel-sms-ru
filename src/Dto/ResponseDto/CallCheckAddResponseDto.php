<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\ResponseDto;

class CallCheckAddResponseDto extends BaseResponseDto
{
    public function __construct(
        private string $checkId,
        private string $callPhone,
        private string $callPhonePretty,
        private string $callPhoneHtml,
        string $status,
        int $statusCode,
    ) {
        parent::__construct($status, $statusCode);
    }

    public function getCheckId(): string
    {
        return $this->checkId;
    }

    public function getCallPhone(): string
    {
        return $this->callPhone;
    }

    public function getCallPhonePretty(): string
    {
        return $this->callPhonePretty;
    }

    public function getCallPhoneHtml(): string
    {
        return $this->callPhoneHtml;
    }
}
