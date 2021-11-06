<?php

namespace Sun\SmsRu\Dto\RequestDto;

class StopListDeleteRequestDto implements RequestDtoInterface
{
    private string $stoplistPhone;

    public function __construct(string $stoplistPhone)
    {
        $this->stoplistPhone = $stoplistPhone;
    }

    public function getStoplistPhone(): string
    {
        return $this->stoplistPhone;
    }
}
