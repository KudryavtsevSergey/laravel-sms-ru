<?php

namespace Sun\SmsRu\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Sun\SmsRu\Auth\AuthInterface;
use Sun\SmsRu\Dto\RequestDto\RequestDtoInterface;
use Sun\SmsRu\Dto\ResponseDto\ResponseDtoInterface;
use Sun\SmsRu\Exceptions\InternalError;
use Sun\SmsRu\Mapper\ArrayObjectMapper;
use Sun\SmsRu\SmsRuConfig;

class SmsRuHttpClientService
{
    private const REQUEST_METHOD = 'POST';
    private const DEFAULT_PARAMS = [
        'json' => 1,
    ];

    private ArrayObjectMapper $arrayObjectMapper;
    private Client $client;
    private AuthInterface $auth;

    public function __construct(
        ArrayObjectMapper $arrayObjectMapper,
        SmsRuConfig $config,
        AuthInterface $auth
    ) {
        $this->arrayObjectMapper = $arrayObjectMapper;
        $this->client = new Client([
            'base_uri' => $config->getGateway(),
        ]);
        $this->auth = $auth;
    }

    public function request(
        string $path,
        string $responseType,
        ?RequestDtoInterface $requestDto = null
    ): ResponseDtoInterface {
        try {
            $data = $requestDto ? $this->arrayObjectMapper->serialize($requestDto) : [];
            $formParams = array_merge($data, $this->auth->getAuthParams(), self::DEFAULT_PARAMS);

            $response = $this->client->request(self::REQUEST_METHOD, $path, [
                RequestOptions::FORM_PARAMS => $formParams,
            ]);

            $data = $this->encodeResponse((string)$response->getBody());
            return $this->arrayObjectMapper->deserialize($data, $responseType);
        } catch (GuzzleException $e) {
            throw new InternalError('Error sending request', $e);
        }
    }

    private function encodeResponse(string $body): array
    {
        return json_decode($body, true);
    }
}
