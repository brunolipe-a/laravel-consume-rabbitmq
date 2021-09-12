<?php

namespace App\RabbitMQ\Contracts;

use VladimirYuldashev\LaravelQueueRabbitMQ\Queue\Jobs\RabbitMQJob;

interface HandlerContract
{
    public function fire(RabbitMQJob $job, array $data): void;
}
