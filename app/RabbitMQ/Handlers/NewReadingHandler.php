<?php

namespace App\RabbitMQ\Handlers;

use App\RabbitMQ\Contracts\HandlerContract;

class NewReadingHandler implements HandlerContract
{
    public function fire($job, $data): void
    {
        dump($data);

        $job->delete();
    }
}
