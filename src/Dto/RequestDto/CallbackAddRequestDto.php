<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\RequestDto;

class CallbackAddRequestDto implements RequestDtoInterface
{
    public function __construct(
        private readonly string $url,
    ) {
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
