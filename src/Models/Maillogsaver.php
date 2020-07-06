<?php

namespace Akshay\Maillogsaver\Models;

use Illuminate\Database\Eloquent\Model;

class Maillogsaver extends Model
{
    protected $table = "maillogsavers";


    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}