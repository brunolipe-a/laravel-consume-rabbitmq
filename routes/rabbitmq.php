<?php

use App\RabbitMQ\Consume;
use App\RabbitMQ\Handlers\NewReadingHandler;

Consume::key('jupiter.new_reading', NewReadingHandler::class);
