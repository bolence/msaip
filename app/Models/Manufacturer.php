<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * HasMany relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * HasMany relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saved_manufacturers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(SavedManufacturer::class);
    }

    /**
     * HasMany relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function models(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ManufacturerModels::class);
    }
}
