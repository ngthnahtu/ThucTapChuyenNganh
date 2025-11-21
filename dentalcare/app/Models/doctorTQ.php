<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class doctorTQ extends Model
{
    protected $table='doctor_tong_quats';
    protected $fillable = ['id','name'];
}
