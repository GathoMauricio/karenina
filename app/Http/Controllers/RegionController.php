<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;

class RegionController extends Controller
{
    public function index(){
        $regions = Region::where('status', 'A')->orderBy('description')->get();
        return response()->json($regions);
    }
}
