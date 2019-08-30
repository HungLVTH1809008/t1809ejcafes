<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table= 'product';
    protected $primaryKey = ' product_id';
    protected  $fillable =[
        " product_name",
        "category_id",
        "detail",
        "image",
        "price",
        "priceNew",
        "date",
        "status",
        "active"


    ];
}
