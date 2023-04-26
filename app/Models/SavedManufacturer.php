<?php

namespace App\Models;

use App\Services\MyFavoriteManufacturerScope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SavedManufacturer extends Model
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
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(fn(self $model) =>  $model->user_id = Auth::id());

        static::addGlobalScope(new MyFavoriteManufacturerScope);
    }

    /**
     * BelongsTo relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * BelongsTo relationship
     *
     *  @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function manufacturer_model() {
        return $this->belongsTo(ManufacturerModels::class);
    }
}
