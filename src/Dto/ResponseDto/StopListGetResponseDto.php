<?php

declare(strict_types=1);

namespace Sun\SmsRu\Dto\ResponseDto;

use Sun\SmsRu\Dto\ResponseDto\Data\StopListResponse;

class StopListGetResponseDto extends BaseResponseDto
{
    /**
     * @param StopListResponse[] $stoplist
     * @param string $status
     * @param int $statusCode
     */
    public function __construct(
        private readonly array $stoplist,
        string $status,
        int $statusCode,
    ) {
        parent::__construct($status, $statusCode);
    }

    public function getStoplist(): array
    {
        return $this->stoplist;
    }
}
