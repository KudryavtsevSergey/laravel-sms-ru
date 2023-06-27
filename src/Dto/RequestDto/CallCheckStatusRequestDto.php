<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\RequestDto;

class CallCheckStatusRequestDto implements RequestDtoInterface
{
    public function __construct(
        private string $checkId,
    ) {
    }

    public function getCheckId(): string
    {
        return $this->checkId;
    }
}
