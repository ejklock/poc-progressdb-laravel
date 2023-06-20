<?php

namespace App\Http\Controllers;

use App\Models\Em2cadItem;
use App\Models\ItemEstab;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $result = Em2cadItem::find('000.0015-9');

        dd($result);
    }
}
