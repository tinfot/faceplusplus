<?php

namespace Tinfot\Faceplusplus;

use GuzzleHttp\Client;

class Faceplusplus {

    /**
     * @var mixed
     */
    private $api_key;

    /**
     * @var mixed
     */
    private $api_secret;

    /**
     * Faceplusplus constructor.
     *
     * @param array $config
     */
    public function __construct($config = []) {
        $this->api_key    = $config['api_key'];
        $this->api_secret = $config['api_secret'];
    }

    /**
     * @param string $text
     *
     * @return string
     */
    public function test(string $text): string {
        return $text;
    }

    /**
     * Get human body by base64.
     *
     * @param string $image_base64
     *
     * @return string
     */
    public function humanBodyByBase64(string $image_base64) {
        $client   = new Client();
        $response = $client->post("https://api-cn.faceplusplus.com/humanbodypp/v2/segment", [
            'form_params' => [
                'api_key'      => $this->api_key,
                'api_secret'   => $this->api_secret,
                'image_base64' => $image_base64
            ],
        ]);
        return $response->getBody()->getContents();
    }

    /**
     * Get human body by image url.
     *
     * @param string $image_url
     *
     * @return string
     */
    public function humanBodyByImageUrl(string $image_url) {
        $client   = new Client();
        $response = $client->post("https://api-cn.faceplusplus.com/humanbodypp/v2/segment", [
            'form_params' => [
                'api_key'    => $this->api_key,
                'api_secret' => $this->api_secret,
                'image_url'  => $image_url
            ],
        ]);
        return $response->getBody()->getContents();
    }

    /**
     * @param string $image_base64
     * @param int $whitening
     * @param int $smoothing
     *
     * @return string
     */
    public function faceBeautifyByBase64(string $image_base64, int $whitening = 100, int $smoothing = 100) {
        $client   = new Client();
        $response = $client->post("https://api-cn.faceplusplus.com/facepp/beta/beautify", [
            'form_params' => [
                'api_key'      => $this->api_key,
                'api_secret'   => $this->api_secret,
                'image_base64' => $image_base64,
                'whitening'    => $whitening,
                'smoothing'    => $smoothing,
            ],
        ]);
        return $response->getBody()->getContents();
    }
}