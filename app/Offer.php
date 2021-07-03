<?php

namespace App;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;




class Offer extends Model
{
    protected $table = 'offer';
    public $timestamps = false;





    public function pharmacy()
    {
        return $this->hasOne(Parmacy::class, 'pharmacist_id');
    }

}
