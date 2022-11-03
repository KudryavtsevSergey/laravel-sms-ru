<?php

namespace Sun\SmsRu\Dto\RequestDto\Data;

class PhoneMessage
{
    public function __construct(
        private string $phone,
        private string $message,
    ) {
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
