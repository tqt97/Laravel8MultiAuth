<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Log;

trait DestroyModelTrait
{
    public function destroyModelTrait($id, $model)
    {
        try {
            $model->findOrFail($id)->delete();
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
