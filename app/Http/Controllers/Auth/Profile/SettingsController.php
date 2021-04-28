<?php

namespace App\Http\Controllers\Auth\Profile;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SettingsController extends Controller
{
    public function index(){
        return view('pages.auth.profile');
    }

    public function updateAvatar(Request $request){
        $client = Client::where('id', auth()->user()->cliente()->id)->first();
        if ($request->hasFile('image')) {

            $disk = config('backpack.base.root_disk_name');
            $destination_path = 'public/images/profile/';
            $destination_path_db = 'images/profile/';

            $fileData = 'data:image/' .
                $request->file('image')->getClientOriginalExtension() .  ';base64,' .
                base64_encode(file_get_contents($request->file('image')->getRealPath()));

            if (starts_with($fileData, 'data:image')) {
                $image = Image::make($fileData)->encode('jpg', 90);
                $filename = md5($fileData . time()) . '.jpg';
                Storage::disk($disk)->put($destination_path . $filename, $image->stream());

                $client->update([
                    'image' => $destination_path_db . $filename,
                ]);
            }
        }
        return response()->json([
            'avatar' => url($destination_path_db . $filename),
        ], Response::HTTP_CREATED);
    }
}
