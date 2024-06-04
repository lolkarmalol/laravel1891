<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trucker extends Model
{
    use HasFactory;

    public function package(){

        return $this->belongsTo('App\Models\Package', 'package_id');
    }


    public function trucks()
    {
        return $this->belongsToMany(Truck::class, 'truck_trucker', 'trucker_id', 'truck_id');
    }

}
