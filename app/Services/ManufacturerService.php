<?php namespace App\Services;

use App\Models\Manufacturer;
use App\Models\ManufacturerModels;

class ManufacturerService {

    /**
     * Get list of munufacturers
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getListOfManufacturers(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'manufacturers' => Manufacturer::all()
        ], 200);
    }

    /**
     * Get models per manufacturer
     *
     * @param integer $manufacturerId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getManufacturerModels(int $manufacturerId): \Illuminate\Http\JsonResponse
    {
        $modelsManufacturers = ManufacturerModels::where('manufacturer_id',$manufacturerId)->get();

        return response()->json([
            'models_manufacturers' => $modelsManufacturers
        ], 200);
    }

}
