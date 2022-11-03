<?php

namespace Sun\SmsRu\Dto\RequestDto;

use Sun\SmsRu\Dto\RequestDto\Data\PhoneMessage;

class CostMultipleRequestDto extends AbstractCostRequestDto
{
    /**
     * @param PhoneMessage[] $to
     * @param string|null $from
     * @param bool|null $translit
     */
    public function __construct(
        private array $to,
        ?string $from = null,
        ?bool $translit = null,
    ) {
        parent::__construct($from, $translit);
    }

    public function getTo(): array
    {
        return $this->to;
    }
}
