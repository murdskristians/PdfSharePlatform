<?php

namespace App\Exceptions;

use Request;
use Response;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if($this->isHttpException($exception))
        {
            switch ($exception->getStatusCode()) 
                {
                // not found
                case 404:
                    $url = Request::url();
                    return Response::make(view('error', array('exception' => $exception->getStatusCode(), 'url' => $url)));
                break;

                default:
                    return Response::make(view('error', array('exception' => $exception->getStatusCode())));
                break;
            }
        }
        else
        {
            return parent::render($request, $exception);
        }
        
    }
}
