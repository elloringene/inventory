<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;


class Product extends Eloquent{

	//
    protected $fillable = [
        'name' , 'slug' , 'description' , 'sell_price' , 'categories' , 'brand' , 'photo'
    ];


}
