<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'email', 'destination', 'phone', 'payment_method', 'payment' , 'destination_id' ];
}
