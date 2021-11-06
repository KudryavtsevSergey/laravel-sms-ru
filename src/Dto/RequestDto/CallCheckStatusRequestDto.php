<?php

namespace Sun\SmsRu\Dto\RequestDto;

class CallCheckStatusRequestDto implements RequestDtoInterface
{
    private string $checkId;

    public function __construct(string $checkId)
    {
        $this->checkId = $checkId;
    }

    public function getCheckId(): string
    {
        return $this->checkId;
    }
}
