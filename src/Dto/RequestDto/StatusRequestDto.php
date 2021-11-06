<?php

namespace Sun\SmsRu\Dto\RequestDto;

class StatusRequestDto implements RequestDtoInterface
{
    // TODO: Add normalizer for smsId
    private array $smsId;

    public function __construct(array $smsId)
    {
        $this->smsId = $smsId;
    }

    public function getSmsId(): array
    {
        return $this->smsId;
    }
}
