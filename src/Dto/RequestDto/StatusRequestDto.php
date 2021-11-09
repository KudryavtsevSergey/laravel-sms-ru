<?php

namespace Sun\SmsRu\Dto\RequestDto;

use Sun\SmsRu\Mapper\ArrayNormalizer;
use Symfony\Component\Serializer\Annotation\Context;

class StatusRequestDto implements RequestDtoInterface
{
    /**
     * @Context({
     *     ArrayNormalizer::FORMAT_KEY = ","
     * })
     */
    private array $smsId;

    public function __construct(array $smsId)
    {
        $this->smsId = $smsId;
    }

    public function getSmsId(): array
    {
        return $this->smsId;
    }
}
