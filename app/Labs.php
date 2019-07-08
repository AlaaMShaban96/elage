<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labs extends Model
{
    public function Business()
    {
        return $this->belongsTo('App\Business','labs_business_id','id');
    }
}
