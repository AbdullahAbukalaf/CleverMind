<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ShowMiddleware extends Command
{
    // Command signature
    protected $signature = 'middleware:show {name=lang}'; // Optional parameter for middleware name

    // Command description
    protected $description = 'Show details of the specified middleware';

    public function handle()
    {
        // Get the middleware name from the argument
        $middlewareName = $this->argument('name');

        // Get the middleware registered in the kernel
        $middleware = app('Illuminate\Contracts\Http\Kernel')->getMiddleware();

        // Check if the specified middleware exists
        if (array_key_exists($middlewareName, $middleware)) {
            $this->info("Middleware '{$middlewareName}' is registered.");
            $this->info("Class: " . $middleware[$middlewareName]);
        } else {
            $this->error("Middleware '{$middlewareName}' is not registered.");
        }
    }
}
