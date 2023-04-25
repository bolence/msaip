<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ManufacturerService;
use App\Services\FavoriteManufacturerService;
use App\Http\Requests\MyManufacturersPostRequest;

class SavedManufacturersApiController extends Controller
{
    /**
     * Class constructor
     *
     * @param ManufacturerService $manufactuerService
     */
    public function __construct(protected FavoriteManufacturerService $favoriteManufacturerService)
    {
    }

    /**
     * List user facvorites munufacturers
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return $this->favoriteManufacturerService->listSavedManufacturers();
    }

    /**
     * Store user favorite manufacturer
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(MyManufacturersPostRequest $request): \Illuminate\Http\JsonResponse
    {
        return $this->favoriteManufacturerService->saveFavoriteManufacturers($request->validated());
    }
}
