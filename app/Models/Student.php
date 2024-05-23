<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Relacion Uno a Muchos con Module
    public function module()
    {
        return $this->hasMany(Module::class);
    }
}
