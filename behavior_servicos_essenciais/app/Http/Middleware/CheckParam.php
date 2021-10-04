<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class CheckParam
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $param, $param2)
    {
        Log::info('Foi invocado meu primeiro middleware! [' . $param . '] - [' . $param2 . ']');
        Log::info('Executando no middleware');

        $process = $next($request);

        Log::info('Executando no middleware pela segunda vez depois de ter chamado o controlador');
        return $process;
    }
}
