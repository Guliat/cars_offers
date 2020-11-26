<?php

namespace App\Automobiles;

use Illuminate\Database\Eloquent\Model;

class AutomobilesBrands extends Model
{
    protected $table = 'auto_brands';

    public function models()
    {
        return $this->hasMany('App\Automobiles\AutomobilesModels', 'brand_id')->orderBy('model');
    }

}
