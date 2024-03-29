<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\ResponseDto;

class FreeResponseDto extends BaseResponseDto
{
    public function __construct(
        private readonly int $totalFree,
        private readonly int $usedToday,
        string $status,
        int $statusCode,
    ) {
        parent::__construct($status, $statusCode);
    }

    public function getTotalFree(): int
    {
        return $this->totalFree;
    }

    public function getUsedToday(): int
    {
        return $this->usedToday;
    }
}
