<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    // Relacion Uno a uno (Inversa) con Teacher
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    // Relacion Uno a Muchos (Inversa) con Student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}

