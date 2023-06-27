<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\ResponseDto;

use Sun\SmsRu\Dto\ResponseDto\Data\SmsResponse;

class SmsResponseDto extends BaseResponseDto
{
    /**
     * @param string $status
     * @param int $statusCode
     * @param SmsResponse[] $sms
     * @param float $balance
     */
    public function __construct(
        string $status,
        int $statusCode,
        private array $sms,
        private float $balance,
    ) {
        parent::__construct($status, $statusCode);
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
