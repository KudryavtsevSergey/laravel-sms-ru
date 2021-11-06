<?php

namespace Sun\SmsRu\Events;

use Sun\SmsRu\Dto\SmsStatusDto;

class SmsRuStatusReceivedEvent
{
    private SmsStatusDto $smsStatusDto;

    public function __construct(SmsStatusDto $smsStatusDto)
    {
        $this->smsStatusDto = $smsStatusDto;
    }

    public function getSmsStatusDto(): SmsStatusDto
    {
        return $this->smsStatusDto;
    }
}
