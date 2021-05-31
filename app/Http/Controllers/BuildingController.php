<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index()
    {
        $data = [
            'msg' => '建物です'
        ];
        return view('index', $data);
    }

    public function end($room)
    {
        $data = [
            'room' => $room
        ];
        return view('room', $data);
    }
}
