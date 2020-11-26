<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OffersItems extends Model
{
    protected $table = 'offers_items';

    public function offers()
    {
        return $this->belongsToMany('App\Offers', 'offers_r_items');
    }
}
