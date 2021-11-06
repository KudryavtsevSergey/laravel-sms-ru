<?php

namespace Sun\SmsRu\Dto\RequestDto;

class StopListAddRequestDto implements RequestDtoInterface
{
    private string $stoplistPhone;
    private string $stoplistText;

    public function __construct(string $stoplistPhone, string $stoplistText)
    {
        $this->stoplistPhone = $stoplistPhone;
        $this->stoplistText = $stoplistText;
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
