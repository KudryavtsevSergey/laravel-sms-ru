<?php

namespace Sun\SmsRu\Dto\ResponseDto;

class CallbackResponseDto extends BaseResponseDto
{
    private array $callback;

    public function __construct(array $callback, string $status, int $statusCode)
    {
        parent::__construct($status, $statusCode);
        $this->callback = $callback;
    }

    public function getCallback(): array
    {
        return $this->callback;
    }
}
