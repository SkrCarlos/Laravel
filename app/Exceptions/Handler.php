<?php

namespace App\Exceptions;

use Throwable;
use App\Traits\ApiResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{

    use ApiResponse;
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
     * @return voi d
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception) {
        // dd($exception);

        if (env('APP_ENV' == 'local')) {
            return parent::render($request, $exception);  
        }

        if ($exception instanceof NotFoundHttpException) {
            return $this->errorResponse("Pagina no encontrada", $code = 404, $msj = "Pagina no encontrada");
        }
        if ($exception instanceof ModelNotFoundException ) {
            return $this->errorResponse("Recurso no encontrado", $code = 404, $msj = "Recurso no encontrado");
        }

        return parent::render($request, $exception);  

    }
}
