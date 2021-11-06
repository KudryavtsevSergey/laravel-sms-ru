<?php

namespace Sun\SmsRu\Dto\ResponseDto;

use Sun\SmsRu\Dto\ResponseDto\Data\StopListResponse;

class StopListGetResponseDto extends BaseResponseDto
{
    /**
     * @var StopListResponse[]
     */
    private array $stoplist;

    /**
     * @param StopListResponse[] $stoplist
     * @param string $status
     * @param int $statusCode
     */
    public function __construct(array $stoplist, string $status, int $statusCode)
    {
        parent::__construct($status, $statusCode);
        $this->stoplist = $stoplist;
    }

    public function getStoplist(): array
    {
        return $this->stoplist;
    }
}
