<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Upload extends Eloquent {

	protected $fillable = [
        'filename' , 'mime' , 'original_filename'
    ];

}
