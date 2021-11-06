<?php

namespace Sun\SmsRu\Dto\ResponseDto;

use Sun\SmsRu\Dto\ResponseDto\Data\SmsResponse;

class SmsResponseDto extends BaseResponseDto
{
    /**
     * TODO: Add denormalizer for to SmsResponse
     * @var SmsResponse[]
     */
    private array $sms;
    private float $balance;

    /**
     * @param string $status
     * @param int $statusCode
     * @param SmsResponse[] $sms
     * @param float $balance
     */
    public function __construct(
        string $status,
        int $statusCode,
        array $sms,
        float $balance
    ) {
        parent::__construct($status, $statusCode);
        $this->sms = $sms;
        $this->balance = $balance;
    }

    public function getSms(): array
    {
        return $this->sms;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}
