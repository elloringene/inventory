<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Brand extends Eloquent {

    protected $fillable = [
        'name' , 'slug' , 'description'
    ];

    public static function getById($id){
//        return Brand::where('id' , $id)->first();
//        dd(Brand::where('id' , $id)->first());
    }
}
