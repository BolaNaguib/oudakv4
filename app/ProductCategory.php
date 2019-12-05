<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    //
    public function first_section_product(){
        return $this->belongsTo(Product::class,'product1','id');
    }
    public function Productone(){

    return $this->belongsTo(Product::class,'first_section_product1','id');

    }
    public function Productonex(){

    return $this->belongsTo(Product::class,'first_section_product','id');

    }

    public function Producttwo(){

    return $this->belongsTo(Product::class,'second_section_product1','id');

    }
    public function Producttwox(){

    return $this->belongsTo(Product::class,'second_section_product','id');

    }
}
