<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    public function index()
    {
        $codeArr = ['AAA', 'BBB', 'CCC'];
        return view('welcome', compact('codeArr'));
    }
    public function lunch(Request $request)
    {
        dd($request->all());
    }
}
