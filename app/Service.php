<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function serviceDetail()
    {
        return $this->hasOne('App\ServiceDetail');
    }
}
