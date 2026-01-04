<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';
    protected $fillable = ['id', 'date', 'time', 'status', 'note', 'idDoctor', 'idPatient'];
    public function doctor()
    {
        return $this->belongsTo('App\Models\Doctor', 'idDoctor', 'id');
    }
    public function patient()
    {
        return $this->belongsTo('App\Models\Patient', 'idPatient', 'id');
    }
}
