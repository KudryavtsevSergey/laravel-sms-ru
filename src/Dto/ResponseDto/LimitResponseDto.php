<?php

namespace Sun\SmsRu\Dto\ResponseDto;

class LimitResponseDto extends BaseResponseDto
{
    public function __construct(
        private int $totalLimit,
        private int $usedToday,
        string $status,
        int $statusCode,
    ) {
        parent::__construct($status, $statusCode);
    }

    public function getTotalLimit(): int
    {
        return $this->totalLimit;
    }

    public function getUsedToday(): int
    {
        return $this->usedToday;
    }
}
