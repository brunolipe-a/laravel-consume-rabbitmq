<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RabbitMQServiceProvider extends ServiceProvider
{
    public function register()
    {
        require base_path('routes/rabbitmq.php');
    }
}
