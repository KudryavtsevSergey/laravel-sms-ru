<?php

namespace Sun\SmsRu\Dto\RequestDto;

class CostRequestDto extends AbstractCostRequestDto
{
    private array $to;
    private string $msg;

    public function __construct(array $to, string $msg, ?string $from = null, ?bool $translit = null)
    {
        parent::__construct($from, $translit);
        $this->to = $to;
        $this->msg = $msg;
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
