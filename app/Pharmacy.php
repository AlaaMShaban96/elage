<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    public function Business()
    {
        return $this->belongsTo('App\Business','pharmacies_business_id','id');
    }
}
