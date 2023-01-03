<?php

namespace LaravelFCM;

use GuzzleHttp\Client;
use Illuminate\Support\Manager;

class FCMManager extends Manager
{
    public function getDefaultDriver()
    {
        return config('fcm.driver');
        // return $this->app[ 'config' ][ 'fcm.driver' ];
    }

    protected function createHttpDriver()
    {
        $config = config('fcm.http');

        return new Client(['timeout' => $config[ 'timeout' ]]);
        // $config = $this->app[ 'config' ]->get('fcm.http', []);

        // return new Client(['timeout' => $config[ 'timeout' ]]);
    }
}
