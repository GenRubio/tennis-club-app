<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ShopArticle;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function index(){
        return view('pages.home.tienda');
    }
}
