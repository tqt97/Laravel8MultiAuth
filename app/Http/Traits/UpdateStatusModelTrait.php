<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Log;

trait UpdateStatusModelTrait
{
    public function updateStatusModelTrait($model, $request)
    {
        try {
            $data = $model->findOrFail($request->id);
            $data->status = $request->status;
            $data->save();
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], 200);
        } catch (\Throwable $th) {
            Log::error('Message error : ' . $th->getMessage() . ' --- at line ' . $th->getLine());
            return response()->json([
                'code' => 500,
                'message' => 'error'
            ], 500);
        }
    }
}
