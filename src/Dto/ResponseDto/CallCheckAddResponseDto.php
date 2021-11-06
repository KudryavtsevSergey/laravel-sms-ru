<?php

namespace Sun\SmsRu\Dto\ResponseDto;

class CallCheckAddResponseDto extends BaseResponseDto
{
    private string $checkId;
    private string $callPhone;
    private string $callPhonePretty;
    private string $callPhoneHtml;

    public function __construct(
        string $checkId,
        string $callPhone,
        string $callPhonePretty,
        string $callPhoneHtml,
        string $status,
        int $statusCode
    ) {
        parent::__construct($status, $statusCode);
        $this->checkId = $checkId;
        $this->callPhone = $callPhone;
        $this->callPhonePretty = $callPhonePretty;
        $this->callPhoneHtml = $callPhoneHtml;
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
