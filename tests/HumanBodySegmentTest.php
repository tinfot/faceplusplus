<?php

namespace Tinfot\FacePlusplus\Tests;

use Tinfot\FacePlusplus\Exceptions\HttpException;
use Tinfot\FacePlusplus\FacePlusplus;
use PHPUnit\Framework\TestCase;

class HumanBodySegmentTest extends TestCase {

    /**
     * @throws HttpException
     */
    public function testGetHumanBodySegment()
    {
        $facePlusplus = new FacePlusplus([
            'api_key' => '',
            'api_secret' => ''
        ]);

        $response = $facePlusplus->getHumanBodySegment("data:image/png;base64,...");


    }

    public function testGetBeautify()
    {

    }

    public function testGetHttpClient()
    {
    }

    public function testSetGuzzleOptions()
    {
    }

    /**
     * @throws HttpException
     */
    public function testGetHumanBodySegmentWithInvalidImage()
    {
        $facePlusplus = new FacePlusplus([
            'api_key' => '',
            'api_secret' => ''
        ]);

        $this->expectException(HttpException::class);

        $facePlusplus->getHumanBodySegment("foo");

        $this->fail('Failed to assert getHumanBodySegment throw exception with invalid image.');
    }
}