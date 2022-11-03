<?php

namespace Sun\SmsRu\Dto\ResponseDto;

class SendersResponseDto extends BaseResponseDto
{
    public function __construct(
        private array $senders,
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
