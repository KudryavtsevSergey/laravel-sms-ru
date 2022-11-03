<?php

namespace Sun\SmsRu\Dto\ResponseDto\Data;

class SmsResponse extends AbstractSmsResponse
{
    public function __construct(
        string $number,
        string $status,
        int $statusCode,
        private ?string $smsId = null,
        ?string $statusText = null,
    ) {
        parent::__construct($number, $status, $statusCode, $statusText);
    }

    public function getSmsId(): ?string
    {
        return $this->smsId;
    }
}
