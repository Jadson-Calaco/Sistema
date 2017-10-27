<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailNoticias extends Model
{
    protected $table='email_noticias';
    protected $fillable = ['email'];
}
