<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\RequestDto;

abstract class AbstractRequestDto implements RequestDtoInterface
{
    public function __construct(
        private readonly ?string $partnerId = null,
    ) {
    }

    public function getPartnerId(): ?string
    {
        return $this->partnerId;
    }
}
