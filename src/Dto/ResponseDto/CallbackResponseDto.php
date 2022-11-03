<?php

namespace Sun\SmsRu\Dto\ResponseDto;

class CallbackResponseDto extends BaseResponseDto
{
    public function __construct(
        private array $callback,
        string $status,
        int $statusCode,
    ) {
        parent::__construct($status, $statusCode);
    }

    public function getCallback(): array
    {
        return $this->callback;
    }
}
