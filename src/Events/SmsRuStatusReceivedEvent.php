<?php

namespace Sun\SmsRu\Events;

use Sun\SmsRu\Dto\SmsStatusDto;

class SmsRuStatusReceivedEvent
{
    public function __construct(
        private SmsStatusDto $smsStatusDto,
    ) {
    }

    public function getSmsStatusDto(): SmsStatusDto
    {
        return $this->smsStatusDto;
    }
}
