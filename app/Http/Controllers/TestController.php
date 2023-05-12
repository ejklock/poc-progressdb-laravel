<?php

namespace App\Http\Controllers;

use App\Models\ItemEstab;

class TestController extends Controller
{
    public function index()
    {

        $result = ItemEstab::first();

        dd($result);
    }
}
