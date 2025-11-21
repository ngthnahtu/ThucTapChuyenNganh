<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class doctorPH extends Model
{
    protected $table="doctor_phuc_hois";
    protected $fillable = ['id','name'];
}
