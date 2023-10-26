<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\ResponseDto\Data;

class SmsStatusResponse extends AbstractSmsResponse
{
    public function __construct(
        string $number,
        string $status,
        int $statusCode,
        private readonly ?float $cost,
        private readonly ?int $sms,
        ?string $statusText,
    ) {
        parent::__construct($number, $status, $statusCode, $statusText);
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
