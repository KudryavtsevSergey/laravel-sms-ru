<?php

namespace Sun\SmsRu\Service;

use Sun\SmsRu\Dto\RequestDto\CallbackAddRequestDto;
use Sun\SmsRu\Dto\RequestDto\CallbackDeleteRequestDto;
use Sun\SmsRu\Dto\RequestDto\CallCheckAddRequestDto;
use Sun\SmsRu\Dto\RequestDto\CallCheckStatusRequestDto;
use Sun\SmsRu\Dto\RequestDto\CostRequestDto;
use Sun\SmsRu\Dto\RequestDto\SendMultipleRequestDto;
use Sun\SmsRu\Dto\RequestDto\SendRequestDto;
use Sun\SmsRu\Dto\RequestDto\StatusRequestDto;
use Sun\SmsRu\Dto\RequestDto\StopListAddRequestDto;
use Sun\SmsRu\Dto\RequestDto\StopListDeleteRequestDto;
use Sun\SmsRu\Dto\ResponseDto\BalanceResponseDto;
use Sun\SmsRu\Dto\ResponseDto\BaseResponseDto;
use Sun\SmsRu\Dto\ResponseDto\CallbackResponseDto;
use Sun\SmsRu\Dto\ResponseDto\CallCheckAddResponseDto;
use Sun\SmsRu\Dto\ResponseDto\CallCheckStatusResponseDto;
use Sun\SmsRu\Dto\ResponseDto\CostResponseDto;
use Sun\SmsRu\Dto\ResponseDto\FreeResponseDto;
use Sun\SmsRu\Dto\ResponseDto\LimitResponseDto;
use Sun\SmsRu\Dto\ResponseDto\SendersResponseDto;
use Sun\SmsRu\Dto\ResponseDto\SmsResponseDto;
use Sun\SmsRu\Dto\ResponseDto\StopListGetResponseDto;
use Sun\SmsRu\Enum\ApiEnum;

class SmsRuApiService
{
    public function __construct(
        private SmsRuHttpClientService $httpClient,
    ) {
    }

    public function send(SendRequestDto $requestDto): SmsResponseDto
    {
        /** @var SmsResponseDto $responseDto */
        $responseDto = $this->httpClient->request(ApiEnum::SEND, SmsResponseDto::class, $requestDto);
        return $responseDto;
    }

    public function multipleSend(SendMultipleRequestDto $requestDto): SmsResponseDto
    {
        /** @var SmsResponseDto $responseDto */
        $responseDto = $this->httpClient->request(ApiEnum::SEND, SendMultipleRequestDto::class, $requestDto);
        return $responseDto;
    }

    public function status(StatusRequestDto $requestDto): SmsResponseDto
    {
        /** @var SmsResponseDto $responseDto */
        $responseDto = $this->httpClient->request(ApiEnum::STATUS, SmsResponseDto::class, $requestDto);
        return $responseDto;
    }

    public function cost(CostRequestDto $requestDto): CostResponseDto
    {
        /** @var CostResponseDto $responseDto */
        $responseDto = $this->httpClient->request(ApiEnum::COST, CostResponseDto::class, $requestDto);
        return $responseDto;
    }

    public function balance(): BalanceResponseDto
    {
        /** @var BalanceResponseDto $responseDto */
        $responseDto = $this->httpClient->request(ApiEnum::BALANCE, BalanceResponseDto::class);
        return $responseDto;
    }

    public function limit(): LimitResponseDto
    {
        /** @var LimitResponseDto $responseDto */
        $responseDto = $this->httpClient->request(ApiEnum::LIMIT, LimitResponseDto::class);
        return $responseDto;
    }

    public function free(): FreeResponseDto
    {
        /** @var FreeResponseDto $responseDto */
        $responseDto = $this->httpClient->request(ApiEnum::FREE, FreeResponseDto::class);
        return $responseDto;
    }

    public function senders(): SendersResponseDto
    {
        /** @var SendersResponseDto $responseDto */
        $responseDto = $this->httpClient->request(ApiEnum::SENDERS, SendersResponseDto::class);
        return $responseDto;
    }

    public function check(): BaseResponseDto
    {
        /** @var BaseResponseDto $responseDto */
        $responseDto = $this->httpClient->request(ApiEnum::CHECK, BaseResponseDto::class);
        return $responseDto;
    }

    public function stopListAdd(StopListAddRequestDto $requestDto): BaseResponseDto
    {
        /** @var BaseResponseDto $responseDto */
        $responseDto = $this->httpClient->request(ApiEnum::STOP_LIST_ADD, BaseResponseDto::class, $requestDto);
        return $responseDto;
    }

    public function stopListDelete(StopListDeleteRequestDto $requestDto): BaseResponseDto
    {
        /** @var BaseResponseDto $responseDto */
        $responseDto = $this->httpClient->request(ApiEnum::STOP_LIST_DELETE, BaseResponseDto::class, $requestDto);
        return $responseDto;
    }

    public function stopListGet(): StopListGetResponseDto
    {
        /** @var StopListGetResponseDto $responseDto */
        $responseDto = $this->httpClient->request(ApiEnum::STOP_LIST_GET, StopListGetResponseDto::class);
        return $responseDto;
    }

    public function callbackAdd(CallbackAddRequestDto $requestDto): CallbackResponseDto
    {
        /** @var CallbackResponseDto $responseDto */
        $responseDto = $this->httpClient->request(ApiEnum::CALLBACK_ADD, CallbackResponseDto::class, $requestDto);
        return $responseDto;
    }

    public function callbackDelete(CallbackDeleteRequestDto $requestDto): CallbackResponseDto
    {
        /** @var CallbackResponseDto $responseDto */
        $responseDto = $this->httpClient->request(ApiEnum::CALLBACK_DELETE, CallbackResponseDto::class, $requestDto);
        return $responseDto;
    }

    public function callbackGet(): CallbackResponseDto
    {
        /** @var CallbackResponseDto $responseDto */
        $responseDto = $this->httpClient->request(ApiEnum::CALLBACK_GET, CallbackResponseDto::class);
        return $responseDto;
    }

    public function callCheckAdd(CallCheckAddRequestDto $requestDto): CallCheckAddResponseDto
    {
        /** @var CallCheckAddResponseDto $responseDto */
        $responseDto = $this->httpClient->request(ApiEnum::CALL_CHECK_ADD, CallCheckAddResponseDto::class, $requestDto);
        return $responseDto;
    }

    public function callCheckStatus(CallCheckStatusRequestDto $requestDto): CallCheckStatusResponseDto
    {
        /** @var CallCheckStatusResponseDto $responseDto */
        $responseDto = $this->httpClient->request(
            ApiEnum::CALL_CHECK_STATUS,
            CallCheckStatusResponseDto::class,
            $requestDto
        );
        return $responseDto;
    }
}
