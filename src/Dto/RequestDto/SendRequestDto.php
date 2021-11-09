<?php

namespace Sun\SmsRu\Dto\RequestDto;

use Sun\SmsRu\Mapper\ArrayNormalizer;
use Symfony\Component\Serializer\Annotation\Context;

class SendRequestDto extends AbstractSendRequestDto
{
    /**
     * @Context({
     *     ArrayNormalizer::FORMAT_KEY = ","
     * })
     */
    private array $to;
    private string $msg;

    public function __construct(
        array $to,
        string $msg,
        ?string $from = null,
        ?string $ip = null,
        ?int $time = null,
        ?int $ttl = null,
        ?bool $daytime = null,
        ?bool $translit = null,
        ?bool $test = null,
        ?string $partnerId = null
    ) {
        parent::__construct($from, $ip, $time, $ttl, $daytime, $translit, $test, $partnerId);
        $this->to = $to;
        $this->msg = $msg;
    }

    public function getTo(): array
    {
        return $this->to;
    }

    public function getMsg(): string
    {
        return $this->msg;
    }
}
