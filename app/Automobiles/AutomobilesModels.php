<?php

namespace App\Automobiles;

use Illuminate\Database\Eloquent\Model;

class AutomobilesModels extends Model
{
    protected $table = 'auto_models';

    public function submodels()
    {
        return $this->hasMany('App\Automobiles\AutomobilesSubmodels', 'model_id')->orderBY('submodel');
    }

}
