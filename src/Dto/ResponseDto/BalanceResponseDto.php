<?php

namespace Sun\SmsRu\Dto\ResponseDto;

class BalanceResponseDto extends BaseResponseDto
{
    private float $balance;

    public function __construct(float $balance, string $status, int $statusCode)
    {
        parent::__construct($status, $statusCode);
        $this->balance = $balance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}
