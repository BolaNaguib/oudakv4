<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // only use it online windows doesnt support this
    // public function presentPrice()
    // {
    //   return money_format('$%i', $this->price / 100);
    // }
}
