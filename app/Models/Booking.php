<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function order(){
        return $this->hasOne(Order::class, 'order_id','order_id');
    }
    public function product(){
        return $this->hasOne(Product::class, 'shopify_id','product_id');
    }
    public function shop(){
        return $this->hasOne(User::class, 'id','shop_id');
    }
}
