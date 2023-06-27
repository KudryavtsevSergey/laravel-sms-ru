<?php

declare(strict_types=1);

namespace Sun\SmsRu\Http\Controllers;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Sun\SmsRu\Dto\SmsStatusDto;
use Sun\SmsRu\Events\SmsRuStatusReceivedEvent;

class SmsRuCallbackController extends Controller
{
    public const STATUS_ROUTE_NAME = 'smsru.status';
    private const SMS_STATUS_LINE = 'sms_status';

    public function __construct(
        private Dispatcher $dispatcher,
    ) {
    }

    public function __invoke(Request $request): Response
    {
        $data = $request->input('data');
        foreach ($data as $entry) {
            $lines = explode("\n", $entry);
            $smsId = $lines[1] ?? null;
            $statusCode = filter_var($lines[2] ?? null, FILTER_VALIDATE_INT);
            if (isset($lines[0]) && $lines[0] === self::SMS_STATUS_LINE && !empty($smsId) && !empty($statusCode)) {
                $this->dispatcher->dispatch(new SmsRuStatusReceivedEvent(new SmsStatusDto($smsId, $statusCode)));
            }
        }

        return new Response('100');
    }
}
