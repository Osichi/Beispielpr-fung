<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Log; 

class FesztivalController extends Controller
{
    public function kiirView(){
        //if(request('search')){
       //    $vmi = DB::select('SELECT * FROM fesztival WHERE cim LIKE "%' . request('search') . '%"');
       // }else{
            $vmi = DB::table('fesztival')->get();
       // }
        return view ("kiir", compact('vmi'));
        }

        public function hozzaadView(){
            return view ('hozzaad');
        }

        public function feltolt(Request $request){
            $nev = $request -> nev;
            $szul = $request-> szuletes;
            $tel = $request->telefonszam;
            $email = $request->email;
            $napok = $request->napok;
            $osszeg = $request->osszeg;
            $upload = DB::table('fesztival')-> insert([
                'nev' => $nev,
                'szuletesi_datum' => $szul,
                'telefonszam' => $tel,
                'email'=> $email,
                'foglalt_napok_szama' => $napok,
                'osszeg' => $osszeg
            ]);
            if ($upload) {
                Log::info("Az adatok sikeresen feltöltésre kerültek az adatbázisba");
               return redirect('/fesztivalkiir');
            }
        }
}
