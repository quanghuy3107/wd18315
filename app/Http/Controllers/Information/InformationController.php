<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
        $data = [
            "name" => "Trương Huỳnh Quang Huy",
            "age" => 19,
            "address" => "Hà Nội",
            "gender" => "Nam",
        ];
        return view('info.information', compact("data"));
    }
}
