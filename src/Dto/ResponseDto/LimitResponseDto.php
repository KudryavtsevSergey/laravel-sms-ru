<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\ResponseDto;

class LimitResponseDto extends BaseResponseDto
{
    public function __construct(
        private readonly int $totalLimit,
        private readonly int $usedToday,
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
