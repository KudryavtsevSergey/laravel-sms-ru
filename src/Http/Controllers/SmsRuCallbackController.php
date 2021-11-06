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

    private Dispatcher $dispatcher;

    public function __construct(Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function status(Request $request): Response
    {
        $data = $request->input('data');
        foreach ($data as $entry) {
            $lines = explode("\n", $entry);
            if ($lines[0] === self::SMS_STATUS_LINE && !empty($smsId = $lines[1]) && !empty($statusCode = $lines[2])) {
                $this->dispatcher->dispatch(new SmsRuStatusReceivedEvent(new SmsStatusDto($smsId, $statusCode)));
            }
        }

        return new Response('100');
    }
}
