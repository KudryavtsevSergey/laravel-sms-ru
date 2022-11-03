<?php

namespace Sun\SmsRu\Dto\RequestDto;

class StopListDeleteRequestDto implements RequestDtoInterface
{
    public function __construct(
        private string $stoplistPhone,
    ) {
    }

    public function getStoplistPhone(): string
    {
        return $this->stoplistPhone;
    }
}
