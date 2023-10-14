<?php

namespace App\Http\Middleware;

use App\Enums\Source;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class SliceCheck
{
    /**
     * Handle an incoming request.
     * Проверяет существование среза чисел по заданным параметрам в кеше.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $from = $request->query('from');
        $to = $request->query('to');

        // dd(
        //     '???',
        //     Cache::get("$from:$to")
        // );

        if (Cache::has("$from:$to")) {
            $data['source'] = Source::CACHE;
            $data['fib_slice'] = (Cache::get("$from:$to"));

            return response()->json($data);
        }

        $response = $next($request);

        // Cache::put("$from:$to", $response->getContent());

        return $response;
    }
}
