<?php

namespace App\Http\Middlewares;
use Illuminate\Foundation\Configuration\Middleware as BaseMiddleware;

class MiddlewareHandler
{
    protected array $aliases = [

    ];

    public function __invoke(BaseMiddleware $middleware): BaseMiddleware
    {
        if ($this->aliases) {
            $middleware->alias($this->aliases);
        }

        return $middleware;
    }
}
