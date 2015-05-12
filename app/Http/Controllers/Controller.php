<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Upload;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'login'] );
        $this->middleware('guest', ['only' => 'login'] );
    }

    public static function uploadFile($file){
        $photo = "";

        if ($file!=null) {
            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->put($file->getFilename() . '.' . $extension, File::get($file));
            $entry = new Upload();
            $entry->mime = $file->getClientMimeType();
            $entry->original_filename = $file->getClientOriginalName();
            $photo = $file->getClientOriginalName();
            $entry->filename = $file->getFilename() . '.' . $extension;
            $file->move(public_path() . '/uploads', $file->getClientOriginalName());
            $entry->save();
        }

        return $photo;
    }
}
