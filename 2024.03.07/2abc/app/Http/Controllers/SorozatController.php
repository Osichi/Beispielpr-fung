<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SorozatController extends Controller
{
    public function hozzaadView(){
        return view('hozzaad');
    }

    public function megjelenitView(){
        $sorozatok = DB::table('sorozat')->get();
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
            console.log('Az adatot sikeresen feltöltötte az adatbázisba');
        }
    }
}
