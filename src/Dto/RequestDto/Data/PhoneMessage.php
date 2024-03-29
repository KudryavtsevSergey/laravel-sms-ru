<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\RequestDto\Data;

class PhoneMessage
{
    public function __construct(
        private readonly string $phone,
        private readonly string $message,
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
