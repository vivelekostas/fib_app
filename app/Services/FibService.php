<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;

class FibService
{
    /**
     * Возвращает срез последовательности чисел Фибоначчи
     */
    public function getFibonacciSlice(int $from, int $to) : array {

        $fib = [0, 1];
        for ($i = 1; $i < $to; $i++) {
            $fib[] = $fib[$i] + $fib[$i - 1];
        }

        $fib;

        $fibResult = array_slice($fib, $from);
        Cache::put("$from:$to", $fibResult);

        return $fibResult;
    }
}