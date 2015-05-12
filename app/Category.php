<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Category extends Eloquent {

	protected $fillable = [
        'name' , 'slug' , 'description' , 'categories' , 'description' , 'for'
    ];

    public static function getById($id){
        $category = Category::where('id',$id)->first();
        return $category;
    }

}
