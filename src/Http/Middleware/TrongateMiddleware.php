<?php

namespace ShitwareLtd\LaravelTrongate\Http\Middleware;

use Illuminate\Http\Request;

class TrongateMiddleware
{
    public function handle(Request $request)
    {
        if ($request->wantsJson()) {
            return response()->json([
                'title' => "You've made a huge mistake for using Laravel.",
                'subtitle' => 'Use Trongate!',
                'meta' => [
                    'homepage' => 'https://trongate.io'
                ]
            ]);
        }

        return response()->view('trongate::trongate');
    }
}
