<?php

use App\Models\User;

use Illuminate\Contracts\Auth\Authenticatable;
use Inertia\Inertia;

if (! function_exists('user')) {
    function user(): Authenticatable
    {
        return request()->user() ?? auth()->user();
    }
}

if (! function_exists('inertia')) {
    function inertia(...$args): \Inertia\Response
    {
        return Inertia::render(...$args);
    }
}
