<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;

class LicenseExpirationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $licenseExpirationDate = Carbon::createFromFormat('Y-m-d', config('app.license_expiration_date'));

        // Check if the current date is past the license expiration date
        if (Carbon::now()->gt($licenseExpirationDate)) {
            // License has expired
            return response()->json(['message' => 'License has expired.'], 403);
        }
        return $next($request);
    }
}
