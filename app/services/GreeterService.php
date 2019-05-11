<?php

namespace App\services;

use Helloworld\HelloReply;
use Helloworld\HelloRequest;
use SwFwLess\services\BaseService;

class GreeterService extends BaseService
{
    public function sayHello(HelloRequest $helloRequest) : HelloReply
    {
        return (new HelloReply())->setMessage('ok')
            ->setData('hello ' . $helloRequest->getName() . ' ' . $helloRequest->getAddr());
    }
}
