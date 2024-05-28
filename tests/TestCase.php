<?php

namespace Tests;

use Laravel\Lumen\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
<<<<<<< HEAD
    use CreatesApplication;
=======
    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    public function createApplication()
    {
        return require __DIR__.'/../bootstrap/app.php';
    }
>>>>>>> 7d1b6d8454c92a518cc2b24a08c9408be49cea16
}
