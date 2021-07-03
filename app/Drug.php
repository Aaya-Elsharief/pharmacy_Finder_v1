<?php

namespace App;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;




class Drug extends Model
{
    protected $table = 'drug';
    public $timestamps = false;

    public function offer()
    {
        return $this->hasOne(Offer::class, 'drug_id');
    }

}
