<?php

namespace Sun\SmsRu\Dto\ResponseDto;

class SendersResponseDto extends BaseResponseDto
{
    private array $senders;

    public function __construct(array $senders, string $status, int $statusCode)
    {
        parent::__construct($status, $statusCode);
        $this->senders = $senders;
    }

    public function getSenders(): array
    {
        return $this->senders;
    }
}
