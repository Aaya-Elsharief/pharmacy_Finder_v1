<?php

namespace App;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;




class Location extends Model
{
    protected $table = 'location';
    public $timestamps = false;

    public function pharmacy()
    {
        return $this->hasOne(Parmacy::class, 'location_id');
    }

}
