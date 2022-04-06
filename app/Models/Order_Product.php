<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Product extends Model
{
    protected $table = 'order_product';
    use HasFactory;
    public $timestamps = false;
}
