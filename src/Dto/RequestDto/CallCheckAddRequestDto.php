<?php

namespace Sun\SmsRu\Dto\RequestDto;

class CallCheckAddRequestDto implements RequestDtoInterface
{
    private string $phone;

    public function __construct(string $phone)
    {
        $this->phone = $phone;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }
}
