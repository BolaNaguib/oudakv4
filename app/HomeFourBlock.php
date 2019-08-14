<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeFourBlock extends Model
{
    public function Product1(){
        return $this->belongsTo(Product::class,'product1','id');
    }
    public function Product2(){
        return $this->belongsTo(Product::class ,'product2','id');
    }

}
