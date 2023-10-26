<?php

declare(strict_types=1);

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
use Sun\SmsRu\Constant\ApiConstant;

class SmsRuApiService
{
    public function __construct(
        private readonly SmsRuHttpClientService $httpClient,
    ) {
    }

    public function send(SendRequestDto $requestDto): SmsResponseDto
    {
        return $this->httpClient->request(ApiConstant::SEND, SmsResponseDto::class, $requestDto);
    }

    public function multipleSend(SendMultipleRequestDto $requestDto): SmsResponseDto
    {
        return $this->httpClient->request(ApiConstant::SEND, SmsResponseDto::class, $requestDto);
    }

    public function status(StatusRequestDto $requestDto): SmsResponseDto
    {
        return $this->httpClient->request(ApiConstant::STATUS, SmsResponseDto::class, $requestDto);
    }

    public function cost(CostRequestDto $requestDto): CostResponseDto
    {
        return $this->httpClient->request(ApiConstant::COST, CostResponseDto::class, $requestDto);
    }

    public function balance(): BalanceResponseDto
    {
        return $this->httpClient->request(ApiConstant::BALANCE, BalanceResponseDto::class);
    }

    public function limit(): LimitResponseDto
    {
        return $this->httpClient->request(ApiConstant::LIMIT, LimitResponseDto::class);
    }

    public function free(): FreeResponseDto
    {
        return $this->httpClient->request(ApiConstant::FREE, FreeResponseDto::class);
    }

    public function senders(): SendersResponseDto
    {
        return $this->httpClient->request(ApiConstant::SENDERS, SendersResponseDto::class);
    }

    public function check(): BaseResponseDto
    {
        return $this->httpClient->request(ApiConstant::CHECK, BaseResponseDto::class);
    }

    public function stopListAdd(StopListAddRequestDto $requestDto): BaseResponseDto
    {
        return $this->httpClient->request(ApiConstant::STOP_LIST_ADD, BaseResponseDto::class, $requestDto);
    }

    public function stopListDelete(StopListDeleteRequestDto $requestDto): BaseResponseDto
    {
        return $this->httpClient->request(ApiConstant::STOP_LIST_DELETE, BaseResponseDto::class, $requestDto);
    }

    public function stopListGet(): StopListGetResponseDto
    {
        return $this->httpClient->request(ApiConstant::STOP_LIST_GET, StopListGetResponseDto::class);
    }

    public function callbackAdd(CallbackAddRequestDto $requestDto): CallbackResponseDto
    {
        return $this->httpClient->request(ApiConstant::CALLBACK_ADD, CallbackResponseDto::class, $requestDto);
    }

    public function callbackDelete(CallbackDeleteRequestDto $requestDto): CallbackResponseDto
    {
        return $this->httpClient->request(ApiConstant::CALLBACK_DELETE, CallbackResponseDto::class, $requestDto);
    }

    public function callbackGet(): CallbackResponseDto
    {
        return $this->httpClient->request(ApiConstant::CALLBACK_GET, CallbackResponseDto::class);
    }

    public function callCheckAdd(CallCheckAddRequestDto $requestDto): CallCheckAddResponseDto
    {
        return $this->httpClient->request(ApiConstant::CALL_CHECK_ADD, CallCheckAddResponseDto::class, $requestDto);
    }

    public function callCheckStatus(CallCheckStatusRequestDto $requestDto): CallCheckStatusResponseDto
    {
        return $this->httpClient->request(
            ApiConstant::CALL_CHECK_STATUS,
            CallCheckStatusResponseDto::class,
            $requestDto
        );
    }
}
