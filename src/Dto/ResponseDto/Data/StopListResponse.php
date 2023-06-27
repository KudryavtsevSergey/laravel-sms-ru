<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\ResponseDto\Data;

class StopListResponse
{
    public function __construct(
        private string $stoplistPhone,
        private string $stoplistText,
    ) {
    }

    public function getStoplistPhone(): string
    {
        return $this->stoplistPhone;
    }

    public function getStoplistText(): string
    {
        return $this->stoplistText;
    }
}
