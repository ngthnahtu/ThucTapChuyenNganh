<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Khoa extends Model
{
    protected $table="khoas";
    protected $fillable = ['id','name','image','status'];
    //cac ham dung de goi khi co khoa ngoai(o list cột khoa)
    // nhớ đổi cột id của các khóa ngoại thành thuộc tính unsigned, ĐIỀN DỮ LIỆU idKhoa để k lỗi
    public function doctor(){
        return $this->hasMany('App\Models\Doctor','idDoctor','id');
    }
}
