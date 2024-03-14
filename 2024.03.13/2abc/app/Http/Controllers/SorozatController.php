<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SorozatController extends Controller
{
    public function hozzaadView(){
        return view('hozzaad');
    }

    public function megjelenitView(){
        if(request('search')){
            $sorozatok = DB::select('SELECT * FROM sorozat WHERE cim LIKE "%' . request('search') . '%"');
        }else{
            $sorozatok = DB::table('sorozat')->get();
        }
        return view('megjelenit', compact('sorozatok'));
    }

    public function hozzaadas(Request $request){
        $cim = $request-> cim;
        $megjelenes = $request->megjelenes;
        $mufaj = $request-> mufaj;
        $szereplok = $request->szereplok;
        $leiras=$request->leiras;

        $upload = DB::table('sorozat')
        ->insert([
            'cim' => $cim,
            'megjelenes' => $megjelenes,
            'mufaj'=>$mufaj,
            'szereplok'=>$szereplok,
            'leiras'=>$leiras,

        ]);
        if ($upload) {
            Log::info('Az adatot sikeresen feltöltötte az adatbázisba');
        }
    }
}