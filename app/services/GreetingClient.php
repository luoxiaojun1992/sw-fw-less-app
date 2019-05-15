<?php

namespace App\services;

/**
 * The greeting service definition.
 *
 * @mixin \Demo\GreetingClient
 */
class GreetingClient
{

    use \SwFwLess\components\traits\Singleton;

    public function __call($name, $arguments)
    {
        $client = new \Demo\GreetingClient('127.0.0.1:50051');
        $client->start();
        list($reply, $status) = call_user_func_array([$client, $name], $arguments);
        $client->close();

        if (!$status) {
            return $reply;
        }

        return null;
    }

}
