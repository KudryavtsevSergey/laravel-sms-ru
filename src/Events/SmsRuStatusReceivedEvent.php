<?php

declare(strict_types=1);

namespace Sun\SmsRu\Events;

use Sun\SmsRu\Dto\SmsStatusDto;

class SmsRuStatusReceivedEvent
{
    public function __construct(
        private readonly SmsStatusDto $smsStatusDto,
    ) {
    }

    public function getSmsStatusDto(): SmsStatusDto
    {
        return $this->smsStatusDto;
    }
}
