<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\ResponseDto;

class BalanceResponseDto extends BaseResponseDto
{
    public function __construct(
        private readonly float $balance,
        string $status,
        int $statusCode,
    ) {
        parent::__construct($status, $statusCode);
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}
