<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    protected $table = 'offers_offers';

    public function items()
    {
        return $this->belongsToMany('App\OffersItems', 'offers_r_items', 'offer_id', 'item_id')
        ->where('offers_r_items.is_active', 1)
        ->withPivot('price', 'quantity', 'note', 'is_active', 'created_at', 'updated_at');
    }

}
