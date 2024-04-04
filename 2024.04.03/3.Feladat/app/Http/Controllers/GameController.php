<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Log; 

class GameController extends Controller
{
    public function kiirView(){

        if(request('search')){
            $vmi = DB::select('SELECT * FROM games WHERE cim LIKE "%' . request('search') . '%"');
        }else{
            $vmi = DB::table('games')->get();
        }

       
        return view("kiir", compact('vmi'));
    }
    public function hozzadView(){
        return view('hozzaad');
    }
    public function hozzaad(Request $request){
        $kategoria = $request->kategoria;
        $cim = $request->cim;
        $ar = $request->ar;
        $megjelens = $request->megjelenes;
        $upload = DB::table('games')
    ->insert([
        'kategoria' => $kategoria,
        'cim' => $cim,
        'ar' => $ar,
        'megjelenes'=>$megjelens,

    ]);
    if ($upload) {
        Log::info("Az adatok sikeresen feltöltésre kerültek az adatbázisba");
       return redirect('/jatekKiir');
    }
    }
}
