<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadImageController extends Controller
{
    public function __invoke(Request $request) {
        return Storage::disk('linode')->put( 'saimon/images',$request->file('image'));
    }
}
