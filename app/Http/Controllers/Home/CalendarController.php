<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\CalendarEvento;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        $eventos = CalendarEvento::where('active', 1)->get();
        $data = array();
        foreach ($eventos as $evento) {
            $data[] = array(
                'id'   => $evento["id"],
                'title'   => $evento["titulo"],
                'start'   => $evento["data_inicio"],
                'end'   => $evento["data_final"],
                'extendedProps' => array(
                    'description' => $evento["descripcion"],
                    'image' => $evento["url"],
                    'fInici' => $evento["data_inicio"],
                    'fFinal' => $evento["data_final"]
                )
            );
        }
        return json_encode($data);
    }
}
