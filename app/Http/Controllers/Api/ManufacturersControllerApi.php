<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ManufacturerService;

class ManufacturersControllerApi extends Controller
{

    public function __construct(protected ManufacturerService $manufacturerService)
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->manufacturerService->getListOfManufacturers();
    }

    /**
     * Undocumented function
     *
     * @param integer $manufacturerId
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(int $manufacturerId): \Illuminate\Http\JsonResponse
    {
        return $this->manufacturerService->getManufacturerModels($manufacturerId);
    }


}
