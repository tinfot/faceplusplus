<?php

namespace Tinfot\FacePlusplus;

use GuzzleHttp\Client;
use Tinfot\FacePlusplus\Exceptions\HttpException;

class FacePlusplus {

    /**
     * @var string $apiKey
     */
    protected $apiKey;

    /**
     * @var string $apiSecret
     */
    protected $apiSecret;

    /**
     * @var array $guzzleOptions
     */
    protected $guzzleOptions = [];

    /**
     * FacePlusplus constructor.
     *
     * @param array $config
     */
    public function __construct($config = [])
    {
        $this->apiKey    = $config['api_key'];
        $this->apiSecret = $config['api_secret'];
    }

    /**
     * Get guzzle http client instance.
     *
     * @return Client
     */
    public function getHttpClient()
    {
        return new Client($this->guzzleOptions);
    }

    /**
     * Set guzzle client options.
     *
     * @param array $options
     */
    public function setGuzzleOptions(array $options)
    {
        $this->guzzleOptions = $options;
    }

    /**
     * Analytic image parameter.
     *
     * @param $image
     *
     * @return string
     */
    private function analyticImageParameter($image): string
    {
        if (is_string($image)) {
            if (filter_var($image, FILTER_VALIDATE_URL)) {
                return 'image_url';
            } else {
                return 'image_base64';
            }
        } else {
            return 'image_file';
        }
    }

    /**
     * Get human body segment.
     *
     * @param mixed $image Option(url, base64, file)
     *
     * @return mixed|string
     *
     * @throws HttpException
     */
    public function getHumanBodySegment($image)
    {
        $url = "https://api-cn.faceplusplus.com/humanbodypp/v2/segment";

        $parameters = [
            [
                'name'     => 'api_key',
                'contents' => $this->apiKey,
            ],
            [
                'name'     => 'api_secret',
                'contents' => $this->apiSecret,
            ],
            [
                'name'     => $this->analyticImageParameter($image),
                'contents' => $image
            ],
        ];

        try {
            $response = $this->getHttpClient()->post($url, [
                'multipart' => $parameters,
            ])->getBody()->getContents();
            return \json_decode($response, true);
        } catch (\Exception $exception) {
            throw new HttpException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }

    /**
     * Get beautify.
     *
     * @param mixed $image Option(url, base64, file)
     * @param int $whitening
     * @param int $smoothing
     *
     * @return mixed|string
     * @throws HttpException
     */
    public function getBeautify($image, int $whitening = 100, int $smoothing = 100)
    {
        $url = "https://api-cn.faceplusplus.com/facepp/v1/beautify";

        $parameters = [
            [
                'name'     => 'api_key',
                'contents' => $this->apiKey,
            ],
            [
                'name'     => 'api_secret',
                'contents' => $this->apiSecret,
            ],
            [
                'name'     => 'whitening',
                'contents' => $whitening,
            ],
            [
                'name'     => 'smoothing',
                'contents' => $smoothing,
            ],
            [
                'name'     => $this->analyticImageParameter($image),
                'contents' => $image
            ],
        ];

        try {
            $response = $this->getHttpClient()->post($url, [
                'multipart' => $parameters,
            ])->getBody()->getContents();
            return \json_decode($response, true);
        } catch (\Exception $exception) {
            throw new HttpException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
}