<?php

declare(strict_types=1);

namespace Sun\SmsRu\Exceptions;

class CallbackAlreadyExistException extends InternalError
{
    public function __construct(string $url)
    {
        $message = sprintf('Callback with url %s already exist', $url);
        parent::__construct($message);
    }
}
