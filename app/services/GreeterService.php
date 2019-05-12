<?php

namespace App\services;

use Helloworld\HelloReply;
use Helloworld\HelloRequest;
use SwFwLess\services\GrpcUnaryService;

class GreeterService extends GrpcUnaryService
{
    public function sayHello(HelloRequest $helloRequest) : HelloReply
    {
        return (new HelloReply())->setMessage('ok')
            ->setData('hello ' . $helloRequest->getName() . ' ' . $helloRequest->getAddr());
    }
}
