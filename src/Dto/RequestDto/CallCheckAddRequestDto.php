<?php

declare(strict_types=1);

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
