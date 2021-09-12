<?php

namespace App\RabbitMQ;

use Exception;
use App\RabbitMQ\Contracts\HandlerContract;

class Consume
{
    public static function key(string $key, string $handlerClass)
    {
        $implements = class_implements($handlerClass);

        if (!in_array(HandlerContract::class, $implements)) {
            throw new Exception("{$handlerClass} must implement HandlerContract");
        }

        app()->bind($key, fn() => app($handlerClass));
    }
}
