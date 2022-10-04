<?php

namespace ShitwareLtd\LaravelTrongate\Http\Middleware;

use Illuminate\Http\Request;

class TrongateMiddleware
{
    public function handle(Request $request)
    {
        if ($request->wantsJson()) {
            return response()->json([
                'title' => __('trongate::translation.title'),
                'subtitle' => __('trongate::translation.subtitle'),
                'meta' => [
                    'homepage' => 'https://trongate.io'
                ]
            ]);
        }

        return response()->view('trongate::trongate');
    }
}
