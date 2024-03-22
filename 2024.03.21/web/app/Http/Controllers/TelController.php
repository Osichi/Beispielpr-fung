<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Log; 

class TelController extends Controller
{
   public function telkonyView(){
    $tel = DB::table('tel')->get();
    return view ('telefonkonyv', compact('tel'));
   }

   public function hozzaadView(){
    return view ("hozzaad");
   }

   public function feltolt(Request $request){
    $nev = $request->nev;
    $telszam = $request->telszam;
    $lakcim = $request->lakcim;
    $szemigszam = $request->szemigszam;
    $upload = DB::table('tel')
    ->insert([
        'nev' => $nev,
        'telszam' => $telszam,
        'lakcim'=>$lakcim,
        'szemigszam'=>$szemigszam,

    ]);
    if ($upload) {
       return redirect('telefonkonyv');
    }
   }
}
