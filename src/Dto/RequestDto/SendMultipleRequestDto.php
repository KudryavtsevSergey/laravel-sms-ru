<?php

namespace Sun\SmsRu\Dto\RequestDto;

use Sun\SmsRu\Dto\RequestDto\Data\PhoneMessage;
use Sun\SmsRu\Mapper\PhoneMessageNormalizer;
use Symfony\Component\Serializer\Annotation\Context;

class SendMultipleRequestDto extends AbstractSendRequestDto
{
    /**
     * @param PhoneMessage[] $to
     * @param string|null $from
     * @param string|null $ip
     * @param int|null $time
     * @param int|null $ttl
     * @param bool|null $daytime
     * @param bool|null $translit
     * @param bool|null $test
     * @param string|null $partnerId
     */
    public function __construct(
        #[Context([PhoneMessageNormalizer::IS_PHONE_MESSAGE_KEY => true])] private array $to,
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
        $this->to = $to;
    }

    public function getTo(): array
    {
        return $this->to;
    }
}
