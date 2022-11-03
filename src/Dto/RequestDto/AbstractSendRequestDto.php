<?php

namespace Sun\SmsRu\Dto\RequestDto;

abstract class AbstractSendRequestDto extends AbstractRequestDto
{
    public function __construct(
        private ?string $from = null,
        private ?string $ip = null,
        private ?int $time = null,
        private ?int $ttl = null,
        private ?bool $daytime = null,
        private ?bool $translit = null,
        private ?bool $test = null,
        ?string $partnerId = null,
    ) {
        parent::__construct($partnerId);
    }

    public function getFrom(): ?string
    {
        return $this->from;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function getTime(): ?int
    {
        return $this->time;
    }

    public function getTtl(): ?int
    {
        return $this->ttl;
    }

    public function getDaytime(): ?bool
    {
        return $this->daytime;
    }

    public function getTranslit(): ?bool
    {
        return $this->translit;
    }

    public function getTest(): ?bool
    {
        return $this->test;
    }
}
