<?php

namespace Sun\SmsRu\Dto\RequestDto;

class CallbackAddRequestDto implements RequestDtoInterface
{
    public function __construct(
        private string $url,
    ) {
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
