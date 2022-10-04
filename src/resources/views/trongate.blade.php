<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://the.missing.style">
    <script src="https://unpkg.com/hyperscript.org@0.9.7"></script>
    <title>Trongate > Laravel</title>
</head>
<body style="text-align: center;">
    <h1>{{ __('trongate::translation.title') }}</h1>
    <h2>{{ __('trongate::translation.subtitle') }}</h2>
    <p>
        {!! __('trongate::translation.message', ['countdown' => '<span _="on load set $timer to '.config('trongate.countdown').' repeat '.config('trongate.countdown').' times decrement $timer then put it into my innerHTML wait 1s end then go to url \'https://trongate.io\'">'.config('trongate.countdown').'</span>']) !!}
    </p>
</body>
</html>
