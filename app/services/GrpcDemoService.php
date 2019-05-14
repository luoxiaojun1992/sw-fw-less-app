<?php

namespace App\services;

use Demo\GreetingClient;
use Demo\HelloRequest;
use SwFwLess\components\http\Response;
use SwFwLess\services\BaseService;

class GrpcDemoService extends BaseService
{
    public function greeting()
    {
        $client = new GreetingClient('127.0.0.1:50051');
        $client->start();
        $request = new HelloRequest();
        $request->setName('ping');
        list($reply, $status) = $client->SayHello($request);
        $data = $reply->getData();
        $client->close();

        return Response::output($data);
    }
}
