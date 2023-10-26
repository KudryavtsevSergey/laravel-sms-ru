<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\ResponseDto;

class CallbackResponseDto extends BaseResponseDto
{
    public function __construct(
        private readonly array $callback,
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
