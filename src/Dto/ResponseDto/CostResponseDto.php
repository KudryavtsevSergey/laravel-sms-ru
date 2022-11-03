<?php

namespace Sun\SmsRu\Dto\ResponseDto;

use Sun\SmsRu\Dto\ResponseDto\Data\SmsResponse;

class CostResponseDto extends BaseResponseDto
{
    /**
     * @param string $status
     * @param int $statusCode
     * @param SmsResponse[] $sms
     * @param float $totalCost
     * @param int $totalSms
     */
    public function __construct(
        string $status,
        int $statusCode,
        private array $sms,
        private float $totalCost,
        private int $totalSms,
    ) {
        parent::__construct($status, $statusCode);
    }

    public function getSms(): array
    {
        return $this->sms;
    }

    public function getTotalCost(): float
    {
        return $this->totalCost;
    }

    public function getTotalSms(): int
    {
        return $this->totalSms;
    }
}
