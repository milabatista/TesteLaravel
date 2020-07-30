<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menus extends Model
{
    protected $fillable = ['customer_id', 'delivery_tax', 'name', 'address', 'phone', 'status'];
}