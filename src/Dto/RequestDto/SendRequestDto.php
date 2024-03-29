<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\RequestDto;

use Sun\SmsRu\Mapper\ArrayNormalizer;
use Symfony\Component\Serializer\Annotation\Context;

class SendRequestDto extends AbstractSendRequestDto
{
    public function __construct(
        #[Context([ArrayNormalizer::FORMAT_KEY => ','])] private readonly array $to,
        private readonly string $msg,
        ?string $from = null,
        ?string $ip = null,
        ?int $time = null,
        ?int $ttl = null,
        ?bool $daytime = null,
        ?bool $translit = null,
        ?bool $test = null,
        ?string $partnerId = null,
    ) {
        parent::__construct($from, $ip, $time, $ttl, $daytime, $translit, $test, $partnerId);
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
