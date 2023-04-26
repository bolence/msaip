<?php

namespace App\Services;

use App\Models\SavedManufacturer;

class FavoriteManufacturerService
{

    /**
     * Get list of users favorites manufacturers
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function listSavedManufacturers(): \Illuminate\Http\JsonResponse
    {

        $mySavedManufacturers = SavedManufacturer::with('manufacturer', 'manufacturer_model')
            // ->where('user_id', 1)
            ->orderByDesc('id')
            ->get();

        return response()->json(
            [
                'my_saved_manufacturers' => $mySavedManufacturers
            ],
            200
        );
    }

    /**
     * Save favorite manufacturer
     *
     * @param array
     * @return \Illuminate\Http\JsonResponse
     */
    public function saveFavoriteManufacturers(array $request): \Illuminate\Http\JsonResponse
    {
        // $request['user_id'] = 1;

        try {
            SavedManufacturer::create($request);
        } catch (\Throwable $th) {
            info('Error occured during saving my favorites manufacturers ' . $th->getMessage() . ' with code ' . $th->getCode() . ' on line ' . $th->getLine());
            return response()->json([
                'message' => 'Error occured during saving manufacturer'
            ], 400);
        }

        return response()->json([
            'message' => 'Successfully saved favorite manufacturer'
        ], 200);
    }
}
