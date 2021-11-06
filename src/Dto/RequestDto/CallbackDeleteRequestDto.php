<?php

namespace Sun\SmsRu\Dto\RequestDto;

class CallbackDeleteRequestDto implements RequestDtoInterface
{
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
