<?php

namespace App\services;

/**
 * The greeting service definition.
 */
interface GreetingInterface
{

    /**
     * Sends a greeting
     * @param \Demo\HelloRequest $request
     * @return \Demo\HelloReply
     */
    public function SayHello(\Demo\HelloRequest $request);

}
