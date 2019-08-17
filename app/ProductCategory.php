<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    //
    public function first_section_product(){
        return $this->belongsTo(Product::class,'product1','id');
    }
}
