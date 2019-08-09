<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $fillable= ['firstname','lastname','email','phone','subject','textdes','subscribe'];
}
