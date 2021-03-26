<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\GalleriaImage;
use Illuminate\Http\Request;

class GalleriaController extends Controller
{
    public function index(){
        $images = GalleriaImage::where('activo', 1)
        ->orderBy('id', 'DESC')
        ->get();
        return view('pages.home.galleria', compact('images'));
    }
}
