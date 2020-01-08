<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;


class guestwishlist extends Model
{
    // protected $text = 'default';
    
    // public function __construct() {
    // parent::__construct();

    //  $this->text = Session::get("wishlist");
    //  dd($this);

    // }
    //
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
