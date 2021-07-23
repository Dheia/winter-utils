<?php

namespace Norotaro\WinterUtils;

use Illuminate\Support\ServiceProvider as SupportServiceProvider;

class ServiceProvider extends SupportServiceProvider
{
    public function boot()
    {
        $this->app->error(function (Exceptions\ApiException $apiException) {
            return [
                'code' => $apiException->getStatusCode(),
                'message' => $apiException->getMessage(),
            ];
        });
    }
}
