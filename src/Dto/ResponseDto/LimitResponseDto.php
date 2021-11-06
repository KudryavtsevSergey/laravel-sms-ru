<?php

namespace Sun\SmsRu\Dto\ResponseDto;

class LimitResponseDto extends BaseResponseDto
{
    private int $totalLimit;
    private int $usedToday;

    public function __construct(int $totalLimit, int $usedToday, string $status, int $statusCode)
    {
        parent::__construct($status, $statusCode);
        $this->totalLimit = $totalLimit;
        $this->usedToday = $usedToday;
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
