<?php

namespace App\services;

/**
 * The greeting service definition.
 *
 * @mixin \Demo\GreetingClient
 */
class GreetingClient  extends \Grpc\ClientStub
{

    use \SwFwLess\components\traits\Singleton;

    protected $grpc_client = \Demo\GreetingClient::class;

}
