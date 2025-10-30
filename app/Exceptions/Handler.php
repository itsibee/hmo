<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Routing\Exceptions\InvalidSignatureException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (InvalidSignatureException $e, Request $request) {
            // You can return a custom view


            if ($request->expectsJson()) {
                return response()->json(['message' => 'The link has expired or is invalid.'], 403);
            }

            
            return response()->view('errors.link-expired', [], 403);
    
            // Or, if you prefer a simple text response:
            // return response('The link has expired or is invalid.', 403);
    
            // Or, for an API that expects JSON:
            // if ($request->expectsJson()) {
            //     return response()->json(['message' => 'The link has expired or is invalid.'], 403);
            // }
            // return response()->view('errors.link-expired', [], 403); // Fallback for non-JSON requests
        });
    }
}
