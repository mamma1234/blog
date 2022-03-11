<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonSampleController extends Controller
{
    public function index()
    {
    //  return response()->json(['name'=>'Name', 'state'=>'CA'], 200, $headers);
        return response()->json(['name'=>'Name', 'state'=>'CA'], 200);
    }
}
