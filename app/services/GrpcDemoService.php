<?php

namespace App\services;

use Demo\HelloRequest;
use SwFwLess\components\http\Response;
use SwFwLess\services\BaseService;

class GrpcDemoService extends BaseService
{
    public function greeting()
    {
        $request = new HelloRequest();
        $request->setName('ping');

        $reply = GreetingClient::create()->SayHello($request);

        if ($reply) {
            $message = $reply->getMessage();
            $data = $reply->getData();
            return Response::json(compact('message', 'data'));
        }

        return Response::output('', 500);
    }
}
