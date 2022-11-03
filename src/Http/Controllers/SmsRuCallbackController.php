<?php

namespace Sun\SmsRu\Http\Controllers;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Sun\SmsRu\Dto\SmsStatusDto;
use Sun\SmsRu\Events\SmsRuStatusReceivedEvent;

class SmsRuCallbackController extends AbstractController
{
    public const STATUS_ROUTE_NAME = 'smsru.status';
    private const SMS_STATUS_LINE = 'sms_status';

    public function __construct(
        private Dispatcher $dispatcher,
    ) {
    }

    public function status(Request $request): Response
    {
        $data = $request->input('data');
        foreach ($data as $entry) {
            $lines = explode("\n", $entry);
            if (
                isset($lines[0])
                && $lines[0] === self::SMS_STATUS_LINE
                && !empty($smsId = $lines[1])
                && !empty($statusCode = $lines[2])
            ) {
                $this->dispatcher->dispatch(new SmsRuStatusReceivedEvent(new SmsStatusDto($smsId, $statusCode)));
            }
        }

        return new Response('100');
    }
}
