<?php

namespace App\Http\Controllers;

use App\Enums\Source;
use App\Http\Requests\FibonacciSliceRequest;
use App\Services\FibService;

/**
 * 
 * 
 * 
 * 
 */
class FibonacciSliceController extends Controller
{
    public $fibService;

   /**
    * 
    */
    public function __construct(FibService $fibService)
    {
        $this->fibService = $fibService;
    }

    /**
     * Handle the incoming request.
     *
     */
    public function __invoke(FibonacciSliceRequest $request)
    {
        $data['source'] = Source::APP;
        $data['fib_slice'] = $this->fibService->getFibonacciSlice(
            $request->query('from'),
            $request->query('to')
        );

        return response()->json($data);
    }
}
