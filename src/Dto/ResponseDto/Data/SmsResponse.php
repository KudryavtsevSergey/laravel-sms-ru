<?php

namespace Sun\SmsRu\Dto\ResponseDto\Data;

class SmsResponse extends AbstractSmsResponse
{
    private ?string $smsId;

    public function __construct(
        string $number,
        string $status,
        int $statusCode,
        ?string $smsId = null,
        ?string $statusText = null
    ) {
        parent::__construct($number, $status, $statusCode, $statusText);
        $this->smsId = $smsId;
    }

    public function getSmsId(): ?string
    {
        return $this->smsId;
    }
}
