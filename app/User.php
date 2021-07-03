<?php

namespace App;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;




class User extends Model
{
    protected $table = 'users';
    public $timestamps = false;

    public function pharmacy()
    {
        return $this->hasOne(Parmacy::class, 'pharmacist_id');
    }

}
