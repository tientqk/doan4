<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class danhmuc extends Model
{
    protected $table='danhmuc';
    protected $primaryKey = 'id';
    public function san_pham()
    {
        return $this->hasMany(sanpham::class,'cat_id','id');
    }
}
