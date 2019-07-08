<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    public function Business()
    {
        return $this->belongsTo('App\Business','hospitals_business_id','id');
    }
}
