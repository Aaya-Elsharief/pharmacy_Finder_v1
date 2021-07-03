<?php

namespace App;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;




class Pharmacy extends Model
{
    protected $table = 'pharmacy';
    public $timestamps = false;

    public function offer()
    {
        return $this->hasOne(Offer::class, 'pharmacy_id');
    }

}
