<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\ResponseDto;

class SendersResponseDto extends BaseResponseDto
{
    public function __construct(
        private readonly array $senders,
        string $status,
        int $statusCode,
    ) {
        parent::__construct($status, $statusCode);
    }

    public function getSenders(): array
    {
        return $this->senders;
    }
}
