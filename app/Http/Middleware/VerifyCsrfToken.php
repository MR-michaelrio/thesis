<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyCsrfToken
{
    // Menonaktifkan CSRF untuk route API
    protected $except = [
        'api/*', // Pengecualian untuk semua route yang dimulai dengan 'api/'
    ];

    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah header 'X-Custom-Header' ada dalam request
        // if ($request->header('X-Custom-Header') !== 'myCustomHeaderValue123') {
        //     return response()->json(['message' => 'Invalid custom header value'], 400);
        // }
        

        return $next($request);
    }
}
