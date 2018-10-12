<?php

namespace Tinfot\Faceplusplus\Test;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Tinfot\Faceplusplus\Facades\Faceplusplus;
use Tinfot\Faceplusplus\FaceplusplusServiceProvider;

class TestCase extends OrchestraTestCase {

    /**
     * Load package service provider
     *
     * @param  \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app) {
        return [FaceplusplusServiceProvider::class];
    }

    /**
     * Load package alias
     *
     * @param  \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageAliases($app) {
        return [
            'Faceplusplus' => Faceplusplus::class,
        ];
    }
}