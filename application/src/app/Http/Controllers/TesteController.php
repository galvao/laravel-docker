<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class TesteController extends Controller
{
    public function testar()
    {
        $records = DB::table('produto')->get();

        return view('teste', ['data' => $records]);
    }
}
