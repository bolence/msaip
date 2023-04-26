<?php namespace App\Scopes;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\{Scope, Builder, Model};

class MyFavoriteManufacturerScope implements Scope {

    public function apply(Builder $builder, Model $model)
    {
        $builder->where('user_id', Auth::id());
    }

}
