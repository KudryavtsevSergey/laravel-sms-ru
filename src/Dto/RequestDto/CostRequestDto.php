<?php

namespace Sun\SmsRu\Dto\RequestDto;

class CostRequestDto extends AbstractCostRequestDto
{
    public function __construct(
        private array $to,
        private string $msg,
        ?string $from = null,
        ?bool $translit = null,
    ) {
        parent::__construct($from, $translit);
    }

    public function getTo(): array
    {
        return $this->to;
    }

    public function getMsg(): string
    {
        return $this->msg;
    }
}
