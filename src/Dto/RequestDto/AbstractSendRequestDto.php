<?php

namespace Sun\SmsRu\Dto\RequestDto;

abstract class AbstractSendRequestDto extends AbstractRequestDto
{
    private ?string $from;
    private ?string $ip;
    private ?int $time;
    private ?int $ttl;
    private ?bool $daytime;
    private ?bool $translit;
    private ?bool $test;

    public function __construct(
        ?string $from = null,
        ?string $ip = null,
        ?int $time = null,
        ?int $ttl = null,
        ?bool $daytime = null,
        ?bool $translit = null,
        ?bool $test = null,
        ?string $partnerId = null
    ) {
        parent::__construct($partnerId);
        $this->from = $from;
        $this->ip = $ip;
        $this->time = $time;
        $this->ttl = $ttl;
        $this->daytime = $daytime;
        $this->translit = $translit;
        $this->test = $test;
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
