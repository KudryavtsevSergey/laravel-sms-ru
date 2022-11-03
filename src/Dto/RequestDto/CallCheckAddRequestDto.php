<?php

namespace Sun\SmsRu\Dto\RequestDto;

class CallCheckAddRequestDto implements RequestDtoInterface
{
    public function __construct(
        private string $phone,
    ) {
    }

    public function getPhone(): string
    {
        return $this->phone;
    }
}
