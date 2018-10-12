<?php

namespace Tinfot\Faceplusplus\Test;

use Tinfot\Faceplusplus\Facades\Faceplusplus;

class FaceplusplusFunctionTest extends TestCase {

    public function testHello(){
        $this->assertSame(Faceplusplus::test("Hello world"), "Hello world");
    }
}