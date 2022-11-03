<?php

namespace Sun\SmsRu\Dto\RequestDto;

abstract class AbstractRequestDto implements RequestDtoInterface
{
    public function __construct(
        private ?string $partnerId = null,
    ) {
    }

    public function getPartnerId(): ?string
    {
        return $this->partnerId;
    }
}
