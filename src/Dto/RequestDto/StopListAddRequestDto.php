<?php

namespace Sun\SmsRu\Dto\RequestDto;

class StopListAddRequestDto implements RequestDtoInterface
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
