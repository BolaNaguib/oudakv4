<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class NewsletterSubscriber extends Model
{
    use Notifiable;

    protected $guarded = ['id'];
}
