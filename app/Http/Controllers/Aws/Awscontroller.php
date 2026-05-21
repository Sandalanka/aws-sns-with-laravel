<?php

namespace App\Http\Controllers\Aws;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Constants\MessageConstant;

class Awscontroller extends Controller
{
    
  /**
     *
     * Summery: Testing aws sns
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function sns(): JsonResponse
    {
        try {
        
            return $this->successResponse(
                message: MessageConstant::SNS_SEND_SUCCESSFULLY
            );

        } catch (Exception $exception) {
            ApiCatchErrors::throw($exception,
                'An error occurred while testing aws-(controller):'
            );

            return $this->errorResponse(
                exception: $exception
            );
        }
    }
}
