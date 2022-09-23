<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Commune;

class RegionController extends Controller
{
    public function index(){
        $regions = Region::where('status', 'A')->orderBy('description')->get();
        return response()->json($regions);
    }

    public function loadCommunesByRegion(Request $request){
        $communes = Commune::where('id_reg',$request->id_reg)->orderBy('description')->get();
        return response()->json($communes);
    }
}
