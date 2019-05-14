<?php

namespace App\services;

use Demo\HelloReply;

/**
 * The greeting service definition.
 */
class GreetingService extends \SwFwLess\services\GrpcUnaryService implements \App\services\GreetingInterface
{

    /**
     * Sends a greeting
     * @param \Demo\HelloRequest $request
     * @return \Demo\HelloReply
     */
    public function SayHello(\Demo\HelloRequest $request)
    {
        return (new HelloReply())->setMessage('ok')->setData('pong');
    }

}
