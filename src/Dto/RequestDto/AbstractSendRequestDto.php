<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\RequestDto;

abstract class AbstractSendRequestDto extends AbstractRequestDto
{
    public function __construct(
        private readonly ?string $from = null,
        private readonly ?string $ip = null,
        private readonly ?int $time = null,
        private readonly ?int $ttl = null,
        private readonly ?bool $daytime = null,
        private readonly ?bool $translit = null,
        private readonly ?bool $test = null,
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
