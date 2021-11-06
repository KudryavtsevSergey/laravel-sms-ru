<?php

namespace Sun\SmsRu\Dto\ResponseDto\Data;

class SmsStatusResponse extends AbstractSmsResponse
{
    private ?float $cost;
    private ?int $sms;

    public function __construct(
        string $number,
        string $status,
        int $statusCode,
        ?float $cost,
        ?int $sms,
        ?string $statusText
    ) {
        parent::__construct($number, $status, $statusCode, $statusText);
        $this->cost = $cost;
        $this->sms = $sms;
    }

    public function getCost(): ?float
    {
        return $this->cost;
    }

    public function getSms(): ?int
    {
        return $this->sms;
    }
}
