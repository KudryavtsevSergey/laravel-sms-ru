<?php

namespace Sun\SmsRu\Dto\ResponseDto;

use Sun\SmsRu\Dto\ResponseDto\Data\SmsResponse;

class CostResponseDto extends BaseResponseDto
{
    /**
     * TODO: Add denormalizer for to SmsResponse
     * @var SmsResponse[]
     */
    private array $sms;
    private float $totalCost;
    private int $totalSms;

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
        array $sms,
        float $totalCost,
        int $totalSms
    ) {
        parent::__construct($status, $statusCode);
        $this->sms = $sms;
        $this->totalCost = $totalCost;
        $this->totalSms = $totalSms;
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
