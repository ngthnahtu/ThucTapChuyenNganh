<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctors';
    protected $fillable = ['id', 'name', 'image', 'description', 'age', 'exp', 'status', 'idKhoa', 'idUser'];
    //cac ham dung de goi khi co khoa ngoai(o bstq, bsph list cột khoa)
    public function khoa()
    {
        return $this->belongsTo('App\Models\Khoa', 'idKhoa', 'id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'idUser', 'id');
    }
    
    public function appointment(){
        return $this->hasMany('App\Models\Appointment','idDoctor','id');
    }
}
