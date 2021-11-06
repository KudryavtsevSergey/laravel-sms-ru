<?php

namespace Sun\SmsRu\Dto\RequestDto;

abstract class AbstractRequestDto implements RequestDtoInterface
{
    private ?string $partnerId;

    public function __construct(?string $partnerId = null)
    {
        $this->partnerId = $partnerId;
    }

    public function getPartnerId(): ?string
    {
        return $this->partnerId;
    }
}
