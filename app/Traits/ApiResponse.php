<?php

    namespace App\Traits;
    use Illuminate\Http\Response;
    use App\Models\User;
    trait ApiResponse
    {
        protected function successResponse($data, $code = Response::HTTP_OK){
            return response() -> json([ 'data' => $data , 'site' => 2] , $code);
        }
        protected function errorResponse($message, $code){
            return response() -> json(['error' => $message, 'code' => $code, 'site' => 2], $code);
        }
    }


?>