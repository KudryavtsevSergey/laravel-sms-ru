<?php

namespace Sun\SmsRu\Dto\ResponseDto;

class FreeResponseDto extends BaseResponseDto
{
    private int $totalFree;
    private int $usedToday;

    public function __construct(int $totalFree, int $usedToday, string $status, int $statusCode)
    {
        parent::__construct($status, $statusCode);
        $this->totalFree = $totalFree;
        $this->usedToday = $usedToday;
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
