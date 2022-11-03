<?php

namespace Sun\SmsRu\Console;

use Illuminate\Console\Command;
use Sun\SmsRu\Dto\RequestDto\CallbackAddRequestDto;
use Sun\SmsRu\Exceptions\CallbackAlreadyExistException;
use Sun\SmsRu\Http\Controllers\SmsRuCallbackController;
use Sun\SmsRu\SmsRu;

class RegisterCallbackCommand extends Command
{
    protected $signature = 'smsru:register-callback';
    protected $description = 'Register callback in sms ru';

    public function __construct(
        private SmsRu $smsRu,
    ) {
        parent::__construct();
    }

    public function handle(): void
    {
        $url = route(SmsRuCallbackController::STATUS_ROUTE_NAME);
        $responseDto = $this->smsRu->apiService()->callbackGet();
        foreach ($responseDto->getCallback() as $callback) {
            if ($callback === $url) {
                throw new CallbackAlreadyExistException($url);
            }
        }

        $this->smsRu->apiService()->callbackAdd(new CallbackAddRequestDto($url));
    }
}
