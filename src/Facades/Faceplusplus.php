<?php

namespace Tinfot\Faceplusplus\Facades;

use Illuminate\Support\Facades\Facade;

class Faceplusplus extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor() {
        return 'faceplusplus';
    }
}