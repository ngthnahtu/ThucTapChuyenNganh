<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';
    protected $fillable = ['id', 'name', 'age', 'gender', 'phone', 'address', 'idUser'];
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'idUser', 'id');
    }
    public function appointments()
    {
        return $this->hasMany('App\Models\Appointment', 'idPatient', 'id');
    }
}
