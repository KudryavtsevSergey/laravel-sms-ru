<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\RequestDto;

use Sun\SmsRu\Mapper\ArrayNormalizer;
use Symfony\Component\Serializer\Annotation\Context;

class StatusRequestDto implements RequestDtoInterface
{
    public function __construct(
        #[Context([ArrayNormalizer::FORMAT_KEY => ','])] private readonly array $smsId,
    ) {
    }

    public function getSmsId(): array
    {
        return $this->smsId;
    }
}
