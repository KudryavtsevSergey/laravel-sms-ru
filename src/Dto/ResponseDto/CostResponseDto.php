<?php

declare(strict_types=1);

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
        private readonly array $sms,
        private readonly float $totalCost,
        private readonly int $totalSms,
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
