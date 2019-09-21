<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainBlock extends Model
{
  public function Productone(){

  return $this->belongsTo(Product::class,'product_1','id');

  }
  public function Producttwo(){

  return $this->belongsTo(Product::class,'product_2','id');

  }
}
