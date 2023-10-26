<?php

declare(strict_types=1);

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

    private Client $client;

    public function __construct(
        private readonly ArrayObjectMapper $arrayObjectMapper,
        SmsRuConfig $config,
        private readonly AuthInterface $auth
    ) {
        $this->client = new Client([
            'base_uri' => $config->getGateway(),
        ]);
    }

    /**
     * @template T of ResponseDtoInterface
     * @param string $path
     * @param class-string<T> $responseType
     * @param RequestDtoInterface|null $requestDto
     * @return T
     */
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
        return json_decode($body, true, flags: JSON_THROW_ON_ERROR);
    }
}
